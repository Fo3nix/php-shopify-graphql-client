<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingColors;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingCornerRadiusVariables;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingTypography;

class CheckoutBrandingDesignSystem
{
    protected $colors;
    protected $cornerRadius;
    protected $typography;

    
    /**
     * @return CheckoutBrandingColors
     */
    public function getColors()
    {
        return $this->colors;
    }

    
    /**
     * @return CheckoutBrandingCornerRadiusVariables
     */
    public function getCornerRadius()
    {
        return $this->cornerRadius;
    }

    
    /**
     * @return CheckoutBrandingTypography
     */
    public function getTypography()
    {
        return $this->typography;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['colors']) && $data['colors'] !== null) {
                $instance->colors = CheckoutBrandingColors::fromArray($data['colors']);
            }
            if (isset($data['cornerRadius']) && $data['cornerRadius'] !== null) {
                $instance->cornerRadius = CheckoutBrandingCornerRadiusVariables::fromArray($data['cornerRadius']);
            }
            if (isset($data['typography']) && $data['typography'] !== null) {
                $instance->typography = CheckoutBrandingTypography::fromArray($data['typography']);
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
            if ($this->colors !== null) {
                $data['colors'] = $this->colors->asArray();
            }
            if ($this->cornerRadius !== null) {
                $data['cornerRadius'] = $this->cornerRadius->asArray();
            }
            if ($this->typography !== null) {
                $data['typography'] = $this->typography->asArray();
            }
            return $data;
        }
}
