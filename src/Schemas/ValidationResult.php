<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ValidationResult extends SplBean
{
    public bool $passed;//	boolean
    public string $reason;//	string

}