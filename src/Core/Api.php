<?php


namespace Kyzone\BIot\Core;

use Hanson\Foundation\AbstractAPI;
use Kyzone\BIot\Base\SplBean;
use Kyzone\BIot\Exception\IotException;

class Api extends AbstractAPI
{
    /**
     * The request token.
     *
     * @var AccessToken
     */
    protected $accessToken;

    /**
     * Constructor.
     *
     * @param AccessToken $accessToken
     */
    public function __construct(AccessToken $accessToken)
    {
        $this->setAccessToken($accessToken);
    }

    /**
     * Set the request token.
     *
     * @param AccessToken $accessToken
     *
     * @return $this
     */
    public function setAccessToken(AccessToken $accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * @return AccessToken
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function get($url, SplBean $params)
    {
        try {
            if ($params instanceof SplBean) {
                $params = $this->paramsHandle($params);
            }
            $http = $this->getHttp();
            $response = $http->get($this->accessToken->getUrl() . $url, $params);

            $result = json_decode(strval($response->getBody()), true);

            $this->checkAndThrow($result);
            return $result;
        } catch (\Exception $e) {
            $this->checkClientThrow($e);
        }
    }

    public function put($url, $params)
    {
        try {
            if ($params instanceof SplBean) {
                $params = $this->paramsHandle($params);
            }
            $http = $this->getHttp();
            $response = $http->request('PUT', $this->accessToken->getUrl() . $url, [
                'json' => $params
            ]);

            $result = json_decode(strval($response->getBody()), true);

            $this->checkAndThrow($result);

            return $result;
        } catch (\Exception $e) {
            $this->checkClientThrow($e);
        }
    }

    public function post($url, $params)
    {
        try {
            if ($params instanceof SplBean) {
                $params = $this->paramsHandle($params);
            }
            $http = $this->getHttp();
            $response = $http->json($this->accessToken->getUrl() . $url, $params);
            $result = json_decode(strval($response->getBody()), true);
            $this->checkAndThrow($result);
            return $result;
        } catch (\Exception $e) {
            $this->checkClientThrow($e);
        }
    }

    public function patch($url, $params)
    {
        try {
            if ($params instanceof SplBean) {
                $params = $this->paramsHandle($params);
            }
            $http = $this->getHttp();
            $response = $http->request("PATCH", $this->accessToken->getUrl() . $url, [
                'json' => $params
            ]);

            $result = json_decode(strval($response->getBody()), true);

            $this->checkAndThrow($result);

            return $result;
        } catch (\Exception $e) {
            $this->checkClientThrow($e);
        }
    }

    public function delete($url, SplBean $params)
    {
        try {
            $http = $this->getHttp();
            $params = $this->paramsHandle($params);
            $response = $http->request("DELETE", $this->accessToken->getUrl() . $url, [
                'json' => $params
            ]);

            $result = json_decode(strval($response->getBody()), true);
            $this->checkAndThrow($result);

            return $result;
        } catch (\Exception $e) {
            $this->checkClientThrow($e);
        }
    }

    public function upload($url, array $query, array $files = [], array $form = [])
    {
        try {
            $http = $this->getHttp();
            $response = $http->upload($this->accessToken->getUrl() . $url, $query, $files, $form);

            $result = json_decode(strval($response->getBody()), true);

            $this->checkAndThrow($result);

            return $result;
        } catch (\Exception $e) {
            $this->checkClientThrow($e);
        }
    }

    /**
     * Check the array data errors, and Throw exception when the contents contains error.
     *
     * @param array $content
     *
     * @throws IotException
     */
    protected function checkAndThrow($content)
    {

        if (!$content) {
            throw new IotException('invalid response.');
        }

        if (!isset($content['status']) || $content['status'] != 200) {
            throw new IotException($content['message']);
        }
    }

    protected function checkClientThrow(\Exception $e)
    {

        $data = explode("response:", $e->getMessage());
        if (count($data) > 1 && $data[1]) {
            $errorData = json_decode($data[1], true);
            throw  new IotException($errorData['message'], $errorData['status']);
        }
        throw  new IotException($e->getMessage(), $e->getCode());
    }

    public function middlewares()
    {
        $this->http->addMiddleware($this->headerMiddleware([
            'X-Access-Token' => $this->accessToken->getToken()
        ]));
    }

    /**
     * @param array $params
     *
     * @return array
     */
    protected function paramsHandle(SplBean $params): array
    {
        $params = $params->toArray();
        array_walk($params, function (&$item, $key) {
            if (is_bool($item)) {
                $item = ['false', 'true'][intval($item)];
            }
        });

        return $params;
    }
}