<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class User extends SplBean
{
    public string $username;//string
    public string $userType;//string
    public string $name;//string
    public string $id;//string
    public array $type;//	DimensionType{...}
    public $options;//	{< * >:	{...}}

}