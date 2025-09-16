<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PriceListAdjustment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PriceListAdjustmentSettings;

class PriceListParent
{
    protected $adjustment;
    protected $settings;

    
    /**
     * @return PriceListAdjustment
     */
    public function getAdjustment()
    {
        return $this->adjustment;
    }

    
    /**
     * @return PriceListAdjustmentSettings
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
                $instance->adjustment = PriceListAdjustment::fromArray($data['adjustment']);
            }
            if (isset($data['settings']) && $data['settings'] !== null) {
                $instance->settings = PriceListAdjustmentSettings::fromArray($data['settings']);
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
