<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDeliveryRateGroupConditions;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDeliveryValueBasedRateConnection;

/**
 * A rate group for a value-based shipping option.
 *
 * Contains rates that define price tiers based on cart value.
 */
class ShopifyDeliveryValueBasedRateGroup implements ShopifyDeliveryOptionDefinitionRateGroup
{
    protected $conditions;
    protected $id;
    protected $rates;

    
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
     * The value-based rates in this rate group.
     *
     * @return ShopifyDeliveryValueBasedRateConnection
     */
    public function getRates(): ?ShopifyDeliveryValueBasedRateConnection
    {
        return $this->rates;
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
            if (isset($data['rates']) && $data['rates'] !== null) {
                $instance->rates = ShopifyDeliveryValueBasedRateConnection::fromArray($data['rates']);
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
            if ($this->rates !== null) {
                $data['rates'] = $this->rates->asArray();
            }
            return $data;
        }
}
