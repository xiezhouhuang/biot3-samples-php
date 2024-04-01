<?php


namespace Kyzone\BIot\Core;

use Hanson\Foundation\AbstractAccessToken;
use Hanson\Foundation\Foundation;
use Kyzone\BIot\Exception\IotException;

class AccessToken extends AbstractAccessToken
{
    const API_URL = 'https://pmpiot.dev2.kyzone.cn/ky-api';
    const SANDBOX_API_URL = 'https://pmpiot.dev2.kyzone.cn/ky-api';

    protected $prefix = 'kyzone.biot.php.token.';

    private $url;

    protected $appId;

    protected $secret;

    protected $expires = 7200; // token过期时间

    protected $signType = 'sha256'; // 加密方式

    /**
     * key of expires in json.
     *
     * @var string
     */
    protected $expiresJsonKey = 'expires_in';
    /**
     * key of token in json.
     *
     * @var string
     */
    protected $tokenJsonKey = 'access_token';

    /**
     * Constructor.
     *
     * @param $appId string appid
     * @param $secret string secret
     * @param bool $debug
     */
    public function __construct(string $appId, string $secret, bool $debug, Foundation $app)
    {
        parent::__construct($app);
        $this->appId = $appId;
        $this->secret = $secret;
        $this->url = $debug ? static::SANDBOX_API_URL : static::API_URL;
    }

    public function setSignType($signType)
    {
        $this->signType = $signType;
        return $this;
    }

    public function getSignType(): string
    {
        return $this->signType;
    }

    public function setExpires($expires)
    {
        $this->expires = $expires;
        return $this;
    }

    public function getTokenFromServer()
    {
        $timestamp = time() * 1000;
        $requestData = [
            'expires' => $this->expires
        ];
        $signature = $this->signature($requestData, $timestamp);
        $headers = [
            'X-Client-Id' => $this->appId,
            'X-Sign' => $signature,
            'X-Timestamp' => $timestamp,
            'Content-type' => "application/json"
        ];
        $response = $this->getHttp()->request("POST", $this->url . '/api/v1/token', [
            "json" => $requestData,
            "headers" => $headers
        ]);
        $result = json_decode(strval($response->getBody()), true);

        return [
            'access_token' => $result['result'] ? $result['result']['token'] : '',
            'message' => $result['message'],
            'status' => $result['status'],
            'expires_in' => $result['result'] ? $result['result']['expires'] / 1000 : 0
        ];
    }

    public function signature($data, $timestamp)
    {
        $jsonData = json_encode($data);
        $timestampStr = strval($timestamp);
        $signatureData = $jsonData . $timestampStr . $this->secret;
        if ($this->signType == 'md5') {
            $signature = md5($signatureData); // Change to sha256 if needed
        } else {
            $signature = hash('sha256', $signatureData);
        }

        return $signature;
    }

    public function checkTokenResponse($result)
    {

        if (!$result) {
            throw new IotException('invalid response.');
        }

        if (!isset($result['status']) || $result['status'] != 200) {
            throw new IotException($result['message']);
        }
    }

    public function getUrl()
    {
        return $this->url;
    }
}