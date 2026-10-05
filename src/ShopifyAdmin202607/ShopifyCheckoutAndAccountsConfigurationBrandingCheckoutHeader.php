<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingHeaderCartLink;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingColors;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingLogo;

class ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeader
{
    protected $alignment;
    protected $background;
    protected $cartLink;
    protected $colors;
    protected $divided;
    protected $logo;
    protected $padding;
    protected $position;

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingHeaderAlignmentEnumObject
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingBackgroundEnumObject
     */
    public function getBackground()
    {
        return $this->background;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingHeaderCartLink
     */
    public function getCartLink()
    {
        return $this->cartLink;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingColors
     */
    public function getColors()
    {
        return $this->colors;
    }

    
    /**
     * @return bool
     */
    public function getDivided()
    {
        return $this->divided;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingLogo
     */
    public function getLogo()
    {
        return $this->logo;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingSpacingKeywordEnumObject
     */
    public function getPadding()
    {
        return $this->padding;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingHeaderPositionEnumObject
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
            if (isset($data['background']) && $data['background'] !== null) {
                $instance->background = $data['background'];
            }
            if (isset($data['cartLink']) && $data['cartLink'] !== null) {
                $instance->cartLink = ShopifyCheckoutAndAccountsConfigurationBrandingHeaderCartLink::fromArray($data['cartLink']);
            }
            if (isset($data['colors']) && $data['colors'] !== null) {
                $instance->colors = ShopifyCheckoutAndAccountsConfigurationBrandingColors::fromArray($data['colors']);
            }
            if (isset($data['divided']) && $data['divided'] !== null) {
                $instance->divided = $data['divided'];
            }
            if (isset($data['logo']) && $data['logo'] !== null) {
                $instance->logo = ShopifyCheckoutAndAccountsConfigurationBrandingLogo::fromArray($data['logo']);
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
            if ($this->background !== null) {
                $data['background'] = $this->background;
            }
            if ($this->cartLink !== null) {
                $data['cartLink'] = $this->cartLink->asArray();
            }
            if ($this->colors !== null) {
                $data['colors'] = $this->colors->asArray();
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
