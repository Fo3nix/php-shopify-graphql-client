<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyVector3;

class ShopifyModel3dBoundingBox
{
    protected $size;

    
    /**
     * @return ShopifyVector3
     */
    public function getSize()
    {
        return $this->size;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['size']) && $data['size'] !== null) {
                $instance->size = ShopifyVector3::fromArray($data['size']);
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
            if ($this->size !== null) {
                $data['size'] = $this->size->asArray();
            }
            return $data;
        }
}
