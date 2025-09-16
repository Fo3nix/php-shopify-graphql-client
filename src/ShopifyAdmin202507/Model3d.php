<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Model3dBoundingBox;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FileError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MediaError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MediaWarning;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Model3dSource;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MediaPreviewImage;

class Model3d
{
    protected $alt;
    protected $boundingBox;
    protected $createdAt;
    protected $fileErrors;
    protected $fileStatus;
    protected $filename;
    protected $id;
    protected $mediaContentType;
    protected $mediaErrors;
    protected $mediaWarnings;
    protected $originalSource;
    protected $preview;
    protected $sources;
    protected $status;
    protected $updatedAt;

    
    /**
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    
    /**
     * @return Model3dBoundingBox
     */
    public function getBoundingBox()
    {
        return $this->boundingBox;
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
    public function getFilename()
    {
        return $this->filename;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return MediaContentTypeEnumObject
     */
    public function getMediaContentType()
    {
        return $this->mediaContentType;
    }

    
    /**
     * @return MediaError[]
     */
    public function getMediaErrors()
    {
        return $this->mediaErrors;
    }

    
    /**
     * @return MediaWarning[]
     */
    public function getMediaWarnings()
    {
        return $this->mediaWarnings;
    }

    
    /**
     * @return Model3dSource
     */
    public function getOriginalSource()
    {
        return $this->originalSource;
    }

    
    /**
     * @return MediaPreviewImage
     */
    public function getPreview()
    {
        return $this->preview;
    }

    
    /**
     * @return Model3dSource[]
     */
    public function getSources()
    {
        return $this->sources;
    }

    
    /**
     * @return MediaStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
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
            if (isset($data['boundingBox']) && $data['boundingBox'] !== null) {
                $instance->boundingBox = Model3dBoundingBox::fromArray($data['boundingBox']);
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
            if (isset($data['filename']) && $data['filename'] !== null) {
                $instance->filename = $data['filename'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['mediaContentType']) && $data['mediaContentType'] !== null) {
                $instance->mediaContentType = $data['mediaContentType'];
            }
            if (isset($data['mediaErrors']) && $data['mediaErrors'] !== null) {
                $instance->mediaErrors = array_map(function($item) { return MediaError::fromArray($item); }, $data['mediaErrors']);
            }
            if (isset($data['mediaWarnings']) && $data['mediaWarnings'] !== null) {
                $instance->mediaWarnings = array_map(function($item) { return MediaWarning::fromArray($item); }, $data['mediaWarnings']);
            }
            if (isset($data['originalSource']) && $data['originalSource'] !== null) {
                $instance->originalSource = Model3dSource::fromArray($data['originalSource']);
            }
            if (isset($data['preview']) && $data['preview'] !== null) {
                $instance->preview = MediaPreviewImage::fromArray($data['preview']);
            }
            if (isset($data['sources']) && $data['sources'] !== null) {
                $instance->sources = array_map(function($item) { return Model3dSource::fromArray($item); }, $data['sources']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->boundingBox !== null) {
                $data['boundingBox'] = $this->boundingBox->asArray();
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
            if ($this->filename !== null) {
                $data['filename'] = $this->filename;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->mediaContentType !== null) {
                $data['mediaContentType'] = $this->mediaContentType;
            }
            if ($this->mediaErrors !== null) {
                $data['mediaErrors'] = array_map(function($item) { return $item->asArray(); }, $this->mediaErrors);
            }
            if ($this->mediaWarnings !== null) {
                $data['mediaWarnings'] = array_map(function($item) { return $item->asArray(); }, $this->mediaWarnings);
            }
            if ($this->originalSource !== null) {
                $data['originalSource'] = $this->originalSource->asArray();
            }
            if ($this->preview !== null) {
                $data['preview'] = $this->preview->asArray();
            }
            if ($this->sources !== null) {
                $data['sources'] = array_map(function($item) { return $item->asArray(); }, $this->sources);
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
