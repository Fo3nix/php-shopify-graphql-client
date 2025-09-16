<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FileError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MediaPreviewImage;

class GenericFile
{
    protected $alt;
    protected $createdAt;
    protected $fileErrors;
    protected $fileStatus;
    protected $id;
    protected $mimeType;
    protected $originalFileSize;
    protected $preview;
    protected $updatedAt;
    protected $url;

    
    /**
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return FileError[]
     */
    public function getFileErrors()
    {
        return $this->fileErrors;
    }

    
    /**
     * @return FileStatusEnumObject
     */
    public function getFileStatus()
    {
        return $this->fileStatus;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    
    /**
     * @return int
     */
    public function getOriginalFileSize()
    {
        return $this->originalFileSize;
    }

    
    /**
     * @return MediaPreviewImage
     */
    public function getPreview()
    {
        return $this->preview;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['alt']) && $data['alt'] !== null) {
                $instance->alt = $data['alt'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['fileErrors']) && $data['fileErrors'] !== null) {
                $instance->fileErrors = array_map(function($item) { return FileError::fromArray($item); }, $data['fileErrors']);
            }
            if (isset($data['fileStatus']) && $data['fileStatus'] !== null) {
                $instance->fileStatus = $data['fileStatus'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['mimeType']) && $data['mimeType'] !== null) {
                $instance->mimeType = $data['mimeType'];
            }
            if (isset($data['originalFileSize']) && $data['originalFileSize'] !== null) {
                $instance->originalFileSize = $data['originalFileSize'];
            }
            if (isset($data['preview']) && $data['preview'] !== null) {
                $instance->preview = MediaPreviewImage::fromArray($data['preview']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['url']) && $data['url'] !== null) {
                $instance->url = $data['url'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->alt !== null) {
                $data['alt'] = $this->alt;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->fileErrors !== null) {
                $data['fileErrors'] = array_map(function($item) { return $item->asArray(); }, $this->fileErrors);
            }
            if ($this->fileStatus !== null) {
                $data['fileStatus'] = $this->fileStatus;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->mimeType !== null) {
                $data['mimeType'] = $this->mimeType;
            }
            if ($this->originalFileSize !== null) {
                $data['originalFileSize'] = $this->originalFileSize;
            }
            if ($this->preview !== null) {
                $data['preview'] = $this->preview->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            return $data;
        }
}
