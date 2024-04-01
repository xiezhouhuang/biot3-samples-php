<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ConfigPropertyMetadata extends SplBean
{
    public array $expands;//	{...}
    public string $description;//	string
    public string $property;//	string
    public string $name;//	string
    public array $type;//DataType{...}
    public array $scopes;//[ConfigScope{...}]

}