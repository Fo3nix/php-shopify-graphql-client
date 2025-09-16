<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingContainerDivider;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingOrderSummarySection;

class CheckoutBrandingOrderSummary
{
    protected $backgroundImage;
    protected $colorScheme;
    protected $divider;
    protected $section;

    
    /**
     * @return CheckoutBrandingImage
     */
    public function getBackgroundImage()
    {
        return $this->backgroundImage;
    }

    
    /**
     * @return CheckoutBrandingColorSchemeSelectionEnumObject
     */
    public function getColorScheme()
    {
        return $this->colorScheme;
    }

    
    /**
     * @return CheckoutBrandingContainerDivider
     */
    public function getDivider()
    {
        return $this->divider;
    }

    
    /**
     * @return CheckoutBrandingOrderSummarySection
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
                $instance->backgroundImage = CheckoutBrandingImage::fromArray($data['backgroundImage']);
            }
            if (isset($data['colorScheme']) && $data['colorScheme'] !== null) {
                $instance->colorScheme = $data['colorScheme'];
            }
            if (isset($data['divider']) && $data['divider'] !== null) {
                $instance->divider = CheckoutBrandingContainerDivider::fromArray($data['divider']);
            }
            if (isset($data['section']) && $data['section'] !== null) {
                $instance->section = CheckoutBrandingOrderSummarySection::fromArray($data['section']);
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
            if ($this->colorScheme !== null) {
                $data['colorScheme'] = $this->colorScheme;
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
