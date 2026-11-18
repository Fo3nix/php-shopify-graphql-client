<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * Represents the result of a read operation performed on a theme asset.
 */
class ShopifyOnlineStoreThemeFileReadResult
{
    protected $code;
    protected $filename;

    
    /**
     * Type that indicates the result of the operation.
     *
     * @return string A ShopifyOnlineStoreThemeFileResultTypeEnumObject value
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    
    /**
     * Unique identifier associated with the operation and the theme file.
     *
     * @return string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['filename']) && $data['filename'] !== null) {
                $instance->filename = $data['filename'];
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
            if ($this->code !== null) {
                $data['code'] = $this->code;
            }
            if ($this->filename !== null) {
                $data['filename'] = $this->filename;
            }
            return $data;
        }
}
