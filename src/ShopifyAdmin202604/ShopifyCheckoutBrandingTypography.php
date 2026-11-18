<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutBrandingFontGroup;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutBrandingFontSize;

/**
 * The typography settings used for checkout-related text. Use these settings to customize the
 * font family and size for primary and secondary text elements.
 *
 * Refer to the [typography tutorial](https://shopify.dev/docs/apps/checkout/styling/customize-typography)
 * for further information on typography customization.
 */
class ShopifyCheckoutBrandingTypography
{
    protected $primary;
    protected $secondary;
    protected $size;

    
    /**
     * A font group used for most components such as text, buttons and form controls.
     *
     * @return ShopifyCheckoutBrandingFontGroup
     */
    public function getPrimary(): ?ShopifyCheckoutBrandingFontGroup
    {
        return $this->primary;
    }

    
    /**
     * A font group used for heading components by default.
     *
     * @return ShopifyCheckoutBrandingFontGroup
     */
    public function getSecondary(): ?ShopifyCheckoutBrandingFontGroup
    {
        return $this->secondary;
    }

    
    /**
     * The font size design system (base size in pixels and scaling between different sizes).
     *
     * @return ShopifyCheckoutBrandingFontSize
     */
    public function getSize(): ?ShopifyCheckoutBrandingFontSize
    {
        return $this->size;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['primary']) && $data['primary'] !== null) {
                $instance->primary = ShopifyCheckoutBrandingFontGroup::fromArray($data['primary']);
            }
            if (isset($data['secondary']) && $data['secondary'] !== null) {
                $instance->secondary = ShopifyCheckoutBrandingFontGroup::fromArray($data['secondary']);
            }
            if (isset($data['size']) && $data['size'] !== null) {
                $instance->size = ShopifyCheckoutBrandingFontSize::fromArray($data['size']);
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
            if ($this->primary !== null) {
                $data['primary'] = $this->primary->asArray();
            }
            if ($this->secondary !== null) {
                $data['secondary'] = $this->secondary->asArray();
            }
            if ($this->size !== null) {
                $data['size'] = $this->size->asArray();
            }
            return $data;
        }
}
