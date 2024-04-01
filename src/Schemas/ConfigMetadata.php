<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ConfigMetadata extends SplBean
{
    public string $description;//	string
    public string $name;//	string
    public array $properties;//[ConfigPropertyMetadata{...}]
    public array $scopes;//[ConfigScope{...}]

}