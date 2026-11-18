<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyImage;

/**
 * The store logo customizations.
 */
class ShopifyCheckoutBrandingLogo
{
    protected $image;
    protected $maxWidth;
    protected $visibility;

    
    /**
     * The logo image.
     *
     * @return ShopifyImage
     */
    public function getImage(): ?ShopifyImage
    {
        return $this->image;
    }

    
    /**
     * The maximum width of the logo.
     *
     * @return int
     */
    public function getMaxWidth(): ?int
    {
        return $this->maxWidth;
    }

    
    /**
     * The visibility of the logo.
     *
     * @return string A ShopifyCheckoutBrandingVisibilityEnumObject value
     */
    public function getVisibility(): ?string
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
