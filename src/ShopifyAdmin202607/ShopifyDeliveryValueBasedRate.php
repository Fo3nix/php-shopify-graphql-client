<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;

/**
 * A value-based shipping rate.
 *
 * Defines price, optional transit time estimates, and the cart-value range for this rate.
 */
class ShopifyDeliveryValueBasedRate implements ShopifyDeliveryRate
{
    protected $id;
    protected $maxValue;
    protected $minValue;
    protected $price;
    protected $transitTimeMaxSeconds;
    protected $transitTimeMinSeconds;

    
    /**
     * A globally unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The maximum cart value (inclusive) for this rate. Null means no upper limit.
     *
     * @return ShopifyMoneyV2
     */
    public function getMaxValue(): ?ShopifyMoneyV2
    {
        return $this->maxValue;
    }

    
    /**
     * The minimum cart value (inclusive) for this rate.
     *
     * @return ShopifyMoneyV2
     */
    public function getMinValue(): ?ShopifyMoneyV2
    {
        return $this->minValue;
    }

    
    /**
     * The price charged for this rate.
     *
     * @return ShopifyMoneyV2
     */
    public function getPrice(): ?ShopifyMoneyV2
    {
        return $this->price;
    }

    
    /**
     * The maximum transit time estimate in seconds.
     *
     * @return int
     */
    public function getTransitTimeMaxSeconds(): ?int
    {
        return $this->transitTimeMaxSeconds;
    }

    
    /**
     * The minimum transit time estimate in seconds.
     *
     * @return int
     */
    public function getTransitTimeMinSeconds(): ?int
    {
        return $this->transitTimeMinSeconds;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['maxValue']) && $data['maxValue'] !== null) {
                $instance->maxValue = ShopifyMoneyV2::fromArray($data['maxValue']);
            }
            if (isset($data['minValue']) && $data['minValue'] !== null) {
                $instance->minValue = ShopifyMoneyV2::fromArray($data['minValue']);
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = ShopifyMoneyV2::fromArray($data['price']);
            }
            if (isset($data['transitTimeMaxSeconds']) && $data['transitTimeMaxSeconds'] !== null) {
                $instance->transitTimeMaxSeconds = $data['transitTimeMaxSeconds'];
            }
            if (isset($data['transitTimeMinSeconds']) && $data['transitTimeMinSeconds'] !== null) {
                $instance->transitTimeMinSeconds = $data['transitTimeMinSeconds'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->maxValue !== null) {
                $data['maxValue'] = $this->maxValue->asArray();
            }
            if ($this->minValue !== null) {
                $data['minValue'] = $this->minValue->asArray();
            }
            if ($this->price !== null) {
                $data['price'] = $this->price->asArray();
            }
            if ($this->transitTimeMaxSeconds !== null) {
                $data['transitTimeMaxSeconds'] = $this->transitTimeMaxSeconds;
            }
            if ($this->transitTimeMinSeconds !== null) {
                $data['transitTimeMinSeconds'] = $this->transitTimeMinSeconds;
            }
            return $data;
        }
}
