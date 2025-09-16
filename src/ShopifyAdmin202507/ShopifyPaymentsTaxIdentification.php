<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ShopifyPaymentsTaxIdentification
{
    protected $taxIdentificationType;
    protected $value;

    
    /**
     * @return ShopifyPaymentsTaxIdentificationTypeEnumObject
     */
    public function getTaxIdentificationType()
    {
        return $this->taxIdentificationType;
    }

    
    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['taxIdentificationType']) && $data['taxIdentificationType'] !== null) {
                $instance->taxIdentificationType = $data['taxIdentificationType'];
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = $data['value'];
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
            if ($this->taxIdentificationType !== null) {
                $data['taxIdentificationType'] = $this->taxIdentificationType;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
