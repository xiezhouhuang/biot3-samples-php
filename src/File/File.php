<?php


namespace Kyzone\BIot\File;


use Kyzone\BIot\Base\SplBean;
use Kyzone\BIot\Core\Api;
use Kyzone\BIot\Schemas\ResponseMessageFileInfo;

class File extends Api
{
    /**
     * 上传文件
     * @param string $file 文件
     * @return ResponseMessageFileInfo
     */
    public function uploadFile($file): ResponseMessageFileInfo
    {
        $result = $this->upload("/api/v1/file/upload", [], ['file' => $file]);
        return new ResponseMessageFileInfo($result);
    }

    /**
     * 获取文件
     * @param string $fileId 文件
     * @return ResponseMessageFileInfo
     */
    public function getFile(string $fileId): ResponseMessageFileInfo
    {
        $result = $this->get("/api/v1/file/{$fileId}", new SplBean());
        return new ResponseMessageFileInfo($result);
    }


}