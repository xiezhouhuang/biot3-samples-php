<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class Permission extends SplBean
{
    public $options;//	{< * >:	{...} }
    public array $dataAccesses;//	[ uniqueItems: true DataAccessConfig{...}]
    public string $name;//	string
    public $actions;//	[ uniqueItems: true string]
    public string $id;//	string

}