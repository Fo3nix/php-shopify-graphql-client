<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionDeliveryMethodPickupOption;

/**
 * A delivery method with a pickup option.
 */
class ShopifySubscriptionDeliveryMethodPickup
{
    protected $pickupOption;

    
    /**
     * The details of the pickup delivery method to use.
     *
     * @return ShopifySubscriptionDeliveryMethodPickupOption
     */
    public function getPickupOption(): ?ShopifySubscriptionDeliveryMethodPickupOption
    {
        return $this->pickupOption;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['pickupOption']) && $data['pickupOption'] !== null) {
                $instance->pickupOption = ShopifySubscriptionDeliveryMethodPickupOption::fromArray($data['pickupOption']);
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
            if ($this->pickupOption !== null) {
                $data['pickupOption'] = $this->pickupOption->asArray();
            }
            return $data;
        }
}
