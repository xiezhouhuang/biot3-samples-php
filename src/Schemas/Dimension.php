<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class Dimension extends SplBean
{
    public $options;//	{ < * >:	{...} }
    public $name;//	string
    public $id;//	string
    public $type;//DimensionType{...}

}