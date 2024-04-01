<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class Authentication extends SplBean
{

    public array $dimensions;//	[Dimension{...}]
    public array $user;// 	User{...}
    public array $permissions;//	[Permission{...}]
    public $attributes;//
}