<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * The type and value of a price list adjustment.
 *
 * For more information on price lists, refer to
 * [Support different pricing models](https://shopify.dev/apps/internationalization/product-price-lists).
 */
class ShopifyPriceListAdjustment
{
    protected $type;
    protected $value;

    
    /**
     * The type of price adjustment, such as percentage increase or decrease.
     *
     * @return string A ShopifyPriceListAdjustmentTypeEnumObject value
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    
    /**
     * The value of price adjustment, where positive numbers reduce the prices and negative numbers
     * increase them.
     *
     * @return float
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = $data['value'];
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
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
