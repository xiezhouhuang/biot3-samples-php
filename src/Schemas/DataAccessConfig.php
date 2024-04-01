<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class DataAccessConfig extends SplBean
{

    public string $action;//	string
    public array $type;//	DataAccessType{...}
}