<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * One type of value given to a customer when a discount is applied to an order.
 * The application of a discount with this value gives the customer the specified percentage off a specified item.
 */
class ShopifyPricingPercentageValue
{
    protected $percentage;

    
    /**
     * The percentage value of the object. This is a number between -100 (free) and 0 (no discount).
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
