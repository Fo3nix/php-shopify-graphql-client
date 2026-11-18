<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyVector3;

/**
 * Bounding box information of a 3d model.
 */
class ShopifyModel3dBoundingBox
{
    protected $size;

    
    /**
     * Size in meters of the smallest volume which contains the 3d model.
     *
     * @return ShopifyVector3
     */
    public function getSize(): ?ShopifyVector3
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
