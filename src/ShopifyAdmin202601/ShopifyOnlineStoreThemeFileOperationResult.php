<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;

/**
 * Represents the result of a copy, delete, or write operation performed on a theme file.
 */
class ShopifyOnlineStoreThemeFileOperationResult
{
    protected $checksumMd5;
    protected $createdAt;
    protected $filename;
    protected $size;
    protected $updatedAt;

    
    /**
     * The md5 digest of the theme file for data integrity.
     *
     * @return string
     */
    public function getChecksumMd5(): ?string
    {
        return $this->checksumMd5;
    }

    
    /**
     * The date and time when the theme file was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * Unique identifier of the theme file.
     *
     * @return string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    
    /**
     * The size of the theme file in bytes.
     *
     * @return string
     */
    public function getSize(): mixed
    {
        return $this->size;
    }

    
    /**
     * The date and time when the theme file was last updated.
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
            if (isset($data['checksumMd5']) && $data['checksumMd5'] !== null) {
                $instance->checksumMd5 = $data['checksumMd5'];
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
            if ($this->checksumMd5 !== null) {
                $data['checksumMd5'] = $this->checksumMd5;
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
