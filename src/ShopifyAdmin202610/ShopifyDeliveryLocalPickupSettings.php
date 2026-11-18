<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Local pickup settings associated with a location.
 */
class ShopifyDeliveryLocalPickupSettings
{
    protected $instructions;
    protected $pickupTime;

    
    /**
     * Additional instructions or information related to the local pickup.
     *
     * @return string
     */
    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    
    /**
     * The estimated pickup time to show customers at checkout.
     *
     * @return string A ShopifyDeliveryLocalPickupTimeEnumObject value
     */
    public function getPickupTime(): ?string
    {
        return $this->pickupTime;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['instructions']) && $data['instructions'] !== null) {
                $instance->instructions = $data['instructions'];
            }
            if (isset($data['pickupTime']) && $data['pickupTime'] !== null) {
                $instance->pickupTime = $data['pickupTime'];
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
            if ($this->instructions !== null) {
                $data['instructions'] = $this->instructions;
            }
            if ($this->pickupTime !== null) {
                $data['pickupTime'] = $this->pickupTime;
            }
            return $data;
        }
}
