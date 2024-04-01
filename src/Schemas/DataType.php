<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class DataType extends SplBean
{

    public $expands; //	{ < * >:	{...} }
    public string $type; //string
    public string $description; //	string
    public string $name; //	string
    public string $id; //	string

}