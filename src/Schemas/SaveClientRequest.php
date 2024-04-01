<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class SaveClientRequest extends SplBean
{
    public array $client; // OpenApiClientEntity{...}
    public array  $orgIdList; // [...]
}