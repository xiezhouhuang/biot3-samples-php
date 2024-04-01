<?php


namespace Kyzone\BIot\Schemas;


class FileInfo
{
    public string $id;
    public string $name;
    public string $extension;
    public int $length;
    public string $md5;
    public string $sha256;
    public int $createTime;
    public string $creatorId;
    public string $options;
    public $others;
    public string $accessUrl;

}