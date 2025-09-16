<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class DeliveryMethodAdditionalInformation
{
    protected $instructions;
    protected $phone;

    
    /**
     * @return string
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    
    /**
     * @return string
     */
    public function getPhone()
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
