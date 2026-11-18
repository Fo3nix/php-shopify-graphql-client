<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;

/**
 * A fixed-price shipping rate.
 *
 * Flat rates charge the same price regardless of cart value or weight,
 * and may include optional transit time estimates.
 */
class ShopifyDeliveryFlatRate implements ShopifyDeliveryRate
{
    protected $id;
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
     * The fixed price charged for this rate.
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
