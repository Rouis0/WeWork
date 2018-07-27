<?php
/**
 * Created by PhpStorm.
 * User: bluehead
 * Date: 2018/7/20
 * Time: 下午5:40
 */

namespace Rouis\WeWork\Request;


use Rouis\Request\DefaultImplementation;

class MediaUploadRequest extends AbstractWeWorkRequest
{
    use DefaultImplementation;

    const path = '/media/upload';

    const method = 'post';

    /**
     * @var string $type
     * 媒体文件类型，分别有图片（image）、语音（voice）、视频（video），普通文件（file）
     */
    private $type;

    private $postName;

    private $filePath = null;

    /** @var string $fileStream
     * 此属性不能和filePath同时为空
     */
    private $fileStream = null;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getFileStream()
    {
        return $this->fileStream;
    }

    /**
     * @param string $fileStream
     */
    public function setFileStream($fileStream)
    {
        $this->fileStream = $fileStream;
    }


    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getPostName()
    {
        return $this->postName;
    }

    /**
     * @param mixed $postName
     */
    public function setPostName($postName)
    {
        $this->postName = $postName;
    }

    /**
     * @return mixed
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * @param mixed $filePath
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
    }

    public function isUploadFile()
    {
        return true;
    }
}