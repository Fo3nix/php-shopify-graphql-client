<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ConsentPolicyRegion
{
    protected $countryCode;
    protected $regionCode;

    
    /**
     * @return PrivacyCountryCodeEnumObject
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    
    /**
     * @return string
     */
    public function getRegionCode()
    {
        return $this->regionCode;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['countryCode']) && $data['countryCode'] !== null) {
                $instance->countryCode = $data['countryCode'];
            }
            if (isset($data['regionCode']) && $data['regionCode'] !== null) {
                $instance->regionCode = $data['regionCode'];
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
            if ($this->countryCode !== null) {
                $data['countryCode'] = $this->countryCode;
            }
            if ($this->regionCode !== null) {
                $data['regionCode'] = $this->regionCode;
            }
            return $data;
        }
}
