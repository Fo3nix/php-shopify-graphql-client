<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingHeaderCartLink;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingColors;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingLogo;

/**
 * The checkout header customizations.
 */
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
     * The header alignment.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingHeaderAlignmentEnumObject value
     */
    public function getAlignment(): ?string
    {
        return $this->alignment;
    }

    
    /**
     * The background style of the header container.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingBackgroundEnumObject value
     */
    public function getBackground(): ?string
    {
        return $this->background;
    }

    
    /**
     * The cart link customizations for 1-page checkout. This field allows to customize the cart icon that renders by default on 1-page checkout.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingHeaderCartLink
     */
    public function getCartLink(): ?ShopifyCheckoutAndAccountsConfigurationBrandingHeaderCartLink
    {
        return $this->cartLink;
    }

    
    /**
     * The colors customizations.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingColors
     */
    public function getColors(): ?ShopifyCheckoutAndAccountsConfigurationBrandingColors
    {
        return $this->colors;
    }

    
    /**
     * The divided setting.
     *
     * @return bool
     */
    public function getDivided(): ?bool
    {
        return $this->divided;
    }

    
    /**
     * The store logo.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingLogo
     */
    public function getLogo(): ?ShopifyCheckoutAndAccountsConfigurationBrandingLogo
    {
        return $this->logo;
    }

    
    /**
     * The padding of the header container.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingSpacingKeywordEnumObject value
     */
    public function getPadding(): ?string
    {
        return $this->padding;
    }

    
    /**
     * The header position.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingHeaderPositionEnumObject value
     */
    public function getPosition(): ?string
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
