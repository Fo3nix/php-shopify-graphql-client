<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingImageValue;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingColors;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingContainerDivider;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummarySection;

class ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummary
{
    protected $backgroundImage;
    protected $colors;
    protected $divider;
    protected $section;

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingImageValue
     */
    public function getBackgroundImage()
    {
        return $this->backgroundImage;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingColors
     */
    public function getColors()
    {
        return $this->colors;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingContainerDivider
     */
    public function getDivider()
    {
        return $this->divider;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummarySection
     */
    public function getSection()
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
                $instance->backgroundImage = ShopifyCheckoutAndAccountsConfigurationBrandingImageValue::fromArray($data['backgroundImage']);
            }
            if (isset($data['colors']) && $data['colors'] !== null) {
                $instance->colors = ShopifyCheckoutAndAccountsConfigurationBrandingColors::fromArray($data['colors']);
            }
            if (isset($data['divider']) && $data['divider'] !== null) {
                $instance->divider = ShopifyCheckoutAndAccountsConfigurationBrandingContainerDivider::fromArray($data['divider']);
            }
            if (isset($data['section']) && $data['section'] !== null) {
                $instance->section = ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummarySection::fromArray($data['section']);
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
                $data['backgroundImage'] = $this->backgroundImage->asArray();
            }
            if ($this->colors !== null) {
                $data['colors'] = $this->colors->asArray();
            }
            if ($this->divider !== null) {
                $data['divider'] = $this->divider->asArray();
            }
            if ($this->section !== null) {
                $data['section'] = $this->section->asArray();
            }
            return $data;
        }
}
