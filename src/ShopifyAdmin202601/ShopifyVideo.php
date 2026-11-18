<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyFileError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMediaError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMediaWarning;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyVideoSource;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMediaPreviewImage;

/**
 * Represents a Shopify hosted video.
 */
class ShopifyVideo implements ShopifyFile, ShopifyMedia, ShopifyNode
{
    protected $alt;
    protected $createdAt;
    protected $duration;
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
     * A word or phrase to share the nature or contents of a media.
     *
     * @return string
     */
    public function getAlt(): ?string
    {
        return $this->alt;
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
     * The video's duration in milliseconds. This value is `null` unless the video's status field is
     * [READY](https://shopify.dev/api/admin-graphql/latest/enums/MediaStatus#value-ready).
     *
     * @return int
     */
    public function getDuration(): ?int
    {
        return $this->duration;
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
     * The video's filename.
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
     * The video's original source. This value is `null` unless the video's status field is
     * [READY](https://shopify.dev/api/admin-graphql/latest/enums/MediaStatus#value-ready).
     *
     * @return ShopifyVideoSource
     */
    public function getOriginalSource(): ?ShopifyVideoSource
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
     * The video's sources. This value is empty unless the video's status field is
     * [READY](https://shopify.dev/api/admin-graphql/latest/enums/MediaStatus#value-ready).
     *
     * @return ShopifyVideoSource[]
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
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['duration']) && $data['duration'] !== null) {
                $instance->duration = $data['duration'];
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
                $instance->originalSource = ShopifyVideoSource::fromArray($data['originalSource']);
            }
            if (isset($data['preview']) && $data['preview'] !== null) {
                $instance->preview = ShopifyMediaPreviewImage::fromArray($data['preview']);
            }
            if (isset($data['sources']) && $data['sources'] !== null) {
                $instance->sources = array_map(function($item) { return ShopifyVideoSource::fromArray($item); }, $data['sources']);
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->duration !== null) {
                $data['duration'] = $this->duration;
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
