<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * Additional information included on a delivery method that will help during the delivery process.
 */
class ShopifyDeliveryMethodAdditionalInformation
{
    protected $instructions;
    protected $phone;

    
    /**
     * The delivery instructions to follow when performing the delivery.
     *
     * @return string
     */
    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    
    /**
     * The phone number to contact when performing the delivery.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
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
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
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
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            return $data;
        }
}
