<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFileHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFile;

/**
 * Provides attributes for visual representation.
 */
class ShopifyMetaobjectThumbnail
{
    protected $file;
    protected $hex;

    
    /**
     * The file to be used for visual representation of this metaobject.
     *
     * @return ShopifyFile
     */
    public function getFile(): ?ShopifyFile
    {
        return $this->file;
    }

    
    /**
     * The hexadecimal color code to be used for representing this metaobject.
     *
     * @return string
     */
    public function getHex(): ?string
    {
        return $this->hex;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['file']) && $data['file'] !== null) {
                $instance->file = ShopifyFileHydrator::fromArray($data['file']);
            }
            if (isset($data['hex']) && $data['hex'] !== null) {
                $instance->hex = $data['hex'];
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
            if ($this->file !== null) {
                $data['file'] = ShopifyFileHydrator::toArray($this->file);
            }
            if ($this->hex !== null) {
                $data['hex'] = $this->hex;
            }
            return $data;
        }
}
