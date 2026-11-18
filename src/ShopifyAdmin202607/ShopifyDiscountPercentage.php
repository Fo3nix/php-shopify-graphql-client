<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Creates percentage-based discounts that reduce item prices by a specified percentage amount. This gives merchants a flexible way to offer proportional savings that automatically scale with order value.
 *
 * For example, a "20% off all winter clothing" promotion would use this object to apply consistent percentage savings across different price points.
 *
 * Learn more about [discount types](https://help.shopify.com/manual/discounts/).
 */
class ShopifyDiscountPercentage
{
    protected $percentage;

    
    /**
     * The percentage value of the discount.
     *
     * @return float
     */
    public function getPercentage(): ?float
    {
        return $this->percentage;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['percentage']) && $data['percentage'] !== null) {
                $instance->percentage = $data['percentage'];
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
            if ($this->percentage !== null) {
                $data['percentage'] = $this->percentage;
            }
            return $data;
        }
}
