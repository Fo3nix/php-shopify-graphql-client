<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPriceListAdjustment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPriceListAdjustmentSettings;

class ShopifyPriceListParent
{
    protected $adjustment;
    protected $settings;

    
    /**
     * @return ShopifyPriceListAdjustment
     */
    public function getAdjustment()
    {
        return $this->adjustment;
    }

    
    /**
     * @return ShopifyPriceListAdjustmentSettings
     */
    public function getSettings()
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
