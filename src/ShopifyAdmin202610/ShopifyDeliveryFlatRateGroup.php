<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDeliveryRateGroupConditions;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDeliveryFlatRate;

/**
 * A flat rate group for a shipping option.
 *
 * Contains one fixed-price rate and optional collection or origin location conditions.
 */
class ShopifyDeliveryFlatRateGroup implements ShopifyDeliveryOptionDefinitionRateGroup
{
    protected $conditions;
    protected $id;
    protected $rate;

    
    /**
     * Conditions that limit this rate group to specific collections or origin locations.
     *
     * @return ShopifyDeliveryRateGroupConditions
     */
    public function getConditions(): ?ShopifyDeliveryRateGroupConditions
    {
        return $this->conditions;
    }

    
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
     * The fixed-price rate and optional transit time.
     *
     * @return ShopifyDeliveryFlatRate
     */
    public function getRate(): ?ShopifyDeliveryFlatRate
    {
        return $this->rate;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['conditions']) && $data['conditions'] !== null) {
                $instance->conditions = ShopifyDeliveryRateGroupConditions::fromArray($data['conditions']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['rate']) && $data['rate'] !== null) {
                $instance->rate = ShopifyDeliveryFlatRate::fromArray($data['rate']);
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
            if ($this->conditions !== null) {
                $data['conditions'] = $this->conditions->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->rate !== null) {
                $data['rate'] = $this->rate->asArray();
            }
            return $data;
        }
}
