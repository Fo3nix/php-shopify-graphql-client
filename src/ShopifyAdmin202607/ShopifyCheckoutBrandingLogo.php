<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyImage;

class ShopifyCheckoutBrandingLogo
{
    protected $image;
    protected $maxWidth;
    protected $visibility;

    
    /**
     * @return ShopifyImage
     */
    public function getImage()
    {
        return $this->image;
    }

    
    /**
     * @return int
     */
    public function getMaxWidth()
    {
        return $this->maxWidth;
    }

    
    /**
     * @return ShopifyCheckoutBrandingVisibilityEnumObject
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = ShopifyImage::fromArray($data['image']);
            }
            if (isset($data['maxWidth']) && $data['maxWidth'] !== null) {
                $instance->maxWidth = $data['maxWidth'];
            }
            if (isset($data['visibility']) && $data['visibility'] !== null) {
                $instance->visibility = $data['visibility'];
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
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            if ($this->maxWidth !== null) {
                $data['maxWidth'] = $this->maxWidth;
            }
            if ($this->visibility !== null) {
                $data['visibility'] = $this->visibility;
            }
            return $data;
        }
}
