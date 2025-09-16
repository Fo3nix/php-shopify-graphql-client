<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OnlineStoreThemeFileBody;
use Carbon\Carbon;

class OnlineStoreThemeFile
{
    protected $body;
    protected $checksumMd5;
    protected $contentType;
    protected $createdAt;
    protected $filename;
    protected $size;
    protected $updatedAt;

    
    /**
     * @return OnlineStoreThemeFileBody
     */
    public function getBody()
    {
        return $this->body;
    }

    
    /**
     * @return string
     */
    public function getChecksumMd5()
    {
        return $this->checksumMd5;
    }

    
    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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
    public function getSize()
    {
        return $this->size;
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
            if (isset($data['body']) && $data['body'] !== null) {
                $instance->body = OnlineStoreThemeFileBody::fromArray($data['body']);
            }
            if (isset($data['checksumMd5']) && $data['checksumMd5'] !== null) {
                $instance->checksumMd5 = $data['checksumMd5'];
            }
            if (isset($data['contentType']) && $data['contentType'] !== null) {
                $instance->contentType = $data['contentType'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['filename']) && $data['filename'] !== null) {
                $instance->filename = $data['filename'];
            }
            if (isset($data['size']) && $data['size'] !== null) {
                $instance->size = $data['size'];
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
            if ($this->body !== null) {
                $data['body'] = $this->body->asArray();
            }
            if ($this->checksumMd5 !== null) {
                $data['checksumMd5'] = $this->checksumMd5;
            }
            if ($this->contentType !== null) {
                $data['contentType'] = $this->contentType;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->filename !== null) {
                $data['filename'] = $this->filename;
            }
            if ($this->size !== null) {
                $data['size'] = $this->size;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
