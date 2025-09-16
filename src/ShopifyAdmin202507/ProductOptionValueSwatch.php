<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MediaImage;

class ProductOptionValueSwatch
{
    protected $color;
    protected $image;

    
    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    
    /**
     * @return MediaImage
     */
    public function getImage()
    {
        return $this->image;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['color']) && $data['color'] !== null) {
                $instance->color = $data['color'];
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = MediaImage::fromArray($data['image']);
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
            if ($this->color !== null) {
                $data['color'] = $this->color;
            }
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            return $data;
        }
}
