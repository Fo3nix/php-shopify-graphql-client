<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingHeaderCartLink;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingLogo;

class ShopifyCheckoutBrandingHeader
{
    protected $alignment;
    protected $banner;
    protected $cartLink;
    protected $colorScheme;
    protected $divided;
    protected $logo;
    protected $padding;
    protected $position;

    
    /**
     * @return ShopifyCheckoutBrandingHeaderAlignmentEnumObject
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    
    /**
     * @return ShopifyCheckoutBrandingImage
     */
    public function getBanner()
    {
        return $this->banner;
    }

    
    /**
     * @return ShopifyCheckoutBrandingHeaderCartLink
     */
    public function getCartLink()
    {
        return $this->cartLink;
    }

    
    /**
     * @return ShopifyCheckoutBrandingColorSchemeSelectionEnumObject
     */
    public function getColorScheme()
    {
        return $this->colorScheme;
    }

    
    /**
     * @return bool
     */
    public function getDivided()
    {
        return $this->divided;
    }

    
    /**
     * @return ShopifyCheckoutBrandingLogo
     */
    public function getLogo()
    {
        return $this->logo;
    }

    
    /**
     * @return ShopifyCheckoutBrandingSpacingKeywordEnumObject
     */
    public function getPadding()
    {
        return $this->padding;
    }

    
    /**
     * @return ShopifyCheckoutBrandingHeaderPositionEnumObject
     */
    public function getPosition()
    {
        return $this->position;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['alignment']) && $data['alignment'] !== null) {
                $instance->alignment = $data['alignment'];
            }
            if (isset($data['banner']) && $data['banner'] !== null) {
                $instance->banner = ShopifyCheckoutBrandingImage::fromArray($data['banner']);
            }
            if (isset($data['cartLink']) && $data['cartLink'] !== null) {
                $instance->cartLink = ShopifyCheckoutBrandingHeaderCartLink::fromArray($data['cartLink']);
            }
            if (isset($data['colorScheme']) && $data['colorScheme'] !== null) {
                $instance->colorScheme = $data['colorScheme'];
            }
            if (isset($data['divided']) && $data['divided'] !== null) {
                $instance->divided = $data['divided'];
            }
            if (isset($data['logo']) && $data['logo'] !== null) {
                $instance->logo = ShopifyCheckoutBrandingLogo::fromArray($data['logo']);
            }
            if (isset($data['padding']) && $data['padding'] !== null) {
                $instance->padding = $data['padding'];
            }
            if (isset($data['position']) && $data['position'] !== null) {
                $instance->position = $data['position'];
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
            if ($this->alignment !== null) {
                $data['alignment'] = $this->alignment;
            }
            if ($this->banner !== null) {
                $data['banner'] = $this->banner->asArray();
            }
            if ($this->cartLink !== null) {
                $data['cartLink'] = $this->cartLink->asArray();
            }
            if ($this->colorScheme !== null) {
                $data['colorScheme'] = $this->colorScheme;
            }
            if ($this->divided !== null) {
                $data['divided'] = $this->divided;
            }
            if ($this->logo !== null) {
                $data['logo'] = $this->logo->asArray();
            }
            if ($this->padding !== null) {
                $data['padding'] = $this->padding;
            }
            if ($this->position !== null) {
                $data['position'] = $this->position;
            }
            return $data;
        }
}
