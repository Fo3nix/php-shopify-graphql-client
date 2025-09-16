<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class DeliveryCountryCodesOrRestOfWorld
{
    protected $countryCodes;
    protected $restOfWorld;

    
    /**
     * @return CountryCodeEnumObject[]
     */
    public function getCountryCodes()
    {
        return $this->countryCodes;
    }

    
    /**
     * @return bool
     */
    public function getRestOfWorld()
    {
        return $this->restOfWorld;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['countryCodes']) && $data['countryCodes'] !== null) {
                $instance->countryCodes = $data['countryCodes'];
            }
            if (isset($data['restOfWorld']) && $data['restOfWorld'] !== null) {
                $instance->restOfWorld = $data['restOfWorld'];
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
            if ($this->countryCodes !== null) {
                $data['countryCodes'] = $this->countryCodes;
            }
            if ($this->restOfWorld !== null) {
                $data['restOfWorld'] = $this->restOfWorld;
            }
            return $data;
        }
}
