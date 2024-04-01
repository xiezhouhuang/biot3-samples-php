<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class RelatedInfo extends SplBean
{

    public string $objectId;//string
    public string $relation;//string
    public string $relationName;//	string
    public $relationExpands;//	{< * >:	{...} }
    public string $relatedType;//string
    public array $related;//	[RelatedObjectInfo{...}] }
}