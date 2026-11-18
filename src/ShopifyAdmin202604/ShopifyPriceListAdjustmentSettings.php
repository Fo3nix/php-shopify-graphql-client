<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * Represents the settings of price list adjustments.
 */
class ShopifyPriceListAdjustmentSettings
{
    protected $compareAtMode;

    
    /**
     * The type of price list adjustment setting for compare at price.
     *
     * @return string A ShopifyPriceListCompareAtModeEnumObject value
     */
    public function getCompareAtMode(): ?string
    {
        return $this->compareAtMode;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['compareAtMode']) && $data['compareAtMode'] !== null) {
                $instance->compareAtMode = $data['compareAtMode'];
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
            if ($this->compareAtMode !== null) {
                $data['compareAtMode'] = $this->compareAtMode;
            }
            return $data;
        }
}
