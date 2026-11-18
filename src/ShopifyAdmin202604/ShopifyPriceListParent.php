<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPriceListAdjustment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPriceListAdjustmentSettings;

/**
 * Represents relative adjustments from one price list to other prices.
 *   You can use a `PriceListParent` to specify an adjusted relative price using a percentage-based
 *   adjustment. Adjusted prices work in conjunction with exchange rules and rounding.
 *
 *   [Adjustment types](https://shopify.dev/api/admin-graphql/latest/enums/pricelistadjustmenttype)
 *   support both percentage increases and decreases.
 */
class ShopifyPriceListParent
{
    protected $adjustment;
    protected $settings;

    
    /**
     * A price list adjustment.
     *
     * @return ShopifyPriceListAdjustment
     */
    public function getAdjustment(): ?ShopifyPriceListAdjustment
    {
        return $this->adjustment;
    }

    
    /**
     * A price list's settings for adjustment.
     *
     * @return ShopifyPriceListAdjustmentSettings
     */
    public function getSettings(): ?ShopifyPriceListAdjustmentSettings
    {
        return $this->settings;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['adjustment']) && $data['adjustment'] !== null) {
                $instance->adjustment = ShopifyPriceListAdjustment::fromArray($data['adjustment']);
            }
            if (isset($data['settings']) && $data['settings'] !== null) {
                $instance->settings = ShopifyPriceListAdjustmentSettings::fromArray($data['settings']);
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
            if ($this->adjustment !== null) {
                $data['adjustment'] = $this->adjustment->asArray();
            }
            if ($this->settings !== null) {
                $data['settings'] = $this->settings->asArray();
            }
            return $data;
        }
}
