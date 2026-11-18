<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyModel3dBoundingBox;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFileError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMediaError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMediaWarning;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyModel3dSource;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMediaPreviewImage;

/**
 * Represents a Shopify hosted 3D model.
 */
class ShopifyModel3d implements ShopifyFile, ShopifyMedia, ShopifyNode
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
     * A word or phrase to describe the contents or the function of a file.
     *
     * @return string
     */
    public function getAlt(): ?string
    {
        return $this->alt;
    }

    
    /**
     * The 3d model's bounding box information.
     *
     * @return ShopifyModel3dBoundingBox
     */
    public function getBoundingBox(): ?ShopifyModel3dBoundingBox
    {
        return $this->boundingBox;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the file was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * Any errors that have occurred on the file.
     *
     * @return ShopifyFileError[]
     */
    public function getFileErrors(): ?array
    {
        return $this->fileErrors;
    }

    
    /**
     * The status of the file.
     *
     * @return string A ShopifyFileStatusEnumObject value
     */
    public function getFileStatus(): ?string
    {
        return $this->fileStatus;
    }

    
    /**
     * The 3d model's filename.
     *
     * @return string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The media content type.
     *
     * @return string A ShopifyMediaContentTypeEnumObject value
     */
    public function getMediaContentType(): ?string
    {
        return $this->mediaContentType;
    }

    
    /**
     * Any errors which have occurred on the media.
     *
     * @return ShopifyMediaError[]
     */
    public function getMediaErrors(): ?array
    {
        return $this->mediaErrors;
    }

    
    /**
     * The warnings attached to the media.
     *
     * @return ShopifyMediaWarning[]
     */
    public function getMediaWarnings(): ?array
    {
        return $this->mediaWarnings;
    }

    
    /**
     * The 3d model's original source.
     *
     * @return ShopifyModel3dSource
     */
    public function getOriginalSource(): ?ShopifyModel3dSource
    {
        return $this->originalSource;
    }

    
    /**
     * The preview image for the media.
     *
     * @return ShopifyMediaPreviewImage
     */
    public function getPreview(): ?ShopifyMediaPreviewImage
    {
        return $this->preview;
    }

    
    /**
     * The 3d model's sources.
     *
     * @return ShopifyModel3dSource[]
     */
    public function getSources(): ?array
    {
        return $this->sources;
    }

    
    /**
     * Current status of the media.
     *
     * @return string A ShopifyMediaStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the file was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
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
                $instance->boundingBox = ShopifyModel3dBoundingBox::fromArray($data['boundingBox']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['fileErrors']) && $data['fileErrors'] !== null) {
                $instance->fileErrors = array_map(function($item) { return ShopifyFileError::fromArray($item); }, $data['fileErrors']);
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
                $instance->mediaErrors = array_map(function($item) { return ShopifyMediaError::fromArray($item); }, $data['mediaErrors']);
            }
            if (isset($data['mediaWarnings']) && $data['mediaWarnings'] !== null) {
                $instance->mediaWarnings = array_map(function($item) { return ShopifyMediaWarning::fromArray($item); }, $data['mediaWarnings']);
            }
            if (isset($data['originalSource']) && $data['originalSource'] !== null) {
                $instance->originalSource = ShopifyModel3dSource::fromArray($data['originalSource']);
            }
            if (isset($data['preview']) && $data['preview'] !== null) {
                $instance->preview = ShopifyMediaPreviewImage::fromArray($data['preview']);
            }
            if (isset($data['sources']) && $data['sources'] !== null) {
                $instance->sources = array_map(function($item) { return ShopifyModel3dSource::fromArray($item); }, $data['sources']);
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
