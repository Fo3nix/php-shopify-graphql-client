<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingImageValueHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingColors;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingMainSection;

/**
 * The sign-in-specific main customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSignInMain
{
    protected $backgroundImage;
    protected $colors;
    protected $section;

    
    /**
     * The background image of the main container.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingImage
     */
    public function getBackgroundImage(): ?ShopifyCheckoutAndAccountsConfigurationBrandingImage
    {
        return $this->backgroundImage;
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
     * The main sections.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingMainSection
     */
    public function getSection(): ?ShopifyCheckoutAndAccountsConfigurationBrandingMainSection
    {
        return $this->section;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['backgroundImage']) && $data['backgroundImage'] !== null) {
                $instance->backgroundImage = ShopifyCheckoutAndAccountsConfigurationBrandingImageValueHydrator::fromArray($data['backgroundImage']);
            }
            if (isset($data['colors']) && $data['colors'] !== null) {
                $instance->colors = ShopifyCheckoutAndAccountsConfigurationBrandingColors::fromArray($data['colors']);
            }
            if (isset($data['section']) && $data['section'] !== null) {
                $instance->section = ShopifyCheckoutAndAccountsConfigurationBrandingMainSection::fromArray($data['section']);
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
            if ($this->backgroundImage !== null) {
                $data['backgroundImage'] = ShopifyCheckoutAndAccountsConfigurationBrandingImageValueHydrator::toArray($this->backgroundImage);
            }
            if ($this->colors !== null) {
                $data['colors'] = $this->colors->asArray();
            }
            if ($this->section !== null) {
                $data['section'] = $this->section->asArray();
            }
            return $data;
        }
}
