<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class DeliveryLocalPickupSettings
{
    protected $instructions;
    protected $pickupTime;

    
    /**
     * @return string
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    
    /**
     * @return DeliveryLocalPickupTimeEnumObject
     */
    public function getPickupTime()
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
