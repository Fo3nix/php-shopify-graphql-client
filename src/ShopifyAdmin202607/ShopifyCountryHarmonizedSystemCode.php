<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * The country-specific harmonized system code and ISO country code for an inventory item.
 */
class ShopifyCountryHarmonizedSystemCode
{
    protected $countryCode;
    protected $harmonizedSystemCode;

    
    /**
     * The ISO 3166-1 alpha-2 country code for the country that issued the specified harmonized system code.
     *
     * @return string A ShopifyCountryCodeEnumObject value
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    
    /**
     * The country-specific harmonized system code. These are usually longer than 6 digits.
     *
     * @return string
     */
    public function getHarmonizedSystemCode(): ?string
    {
        return $this->harmonizedSystemCode;
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
            if (isset($data['harmonizedSystemCode']) && $data['harmonizedSystemCode'] !== null) {
                $instance->harmonizedSystemCode = $data['harmonizedSystemCode'];
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
            if ($this->harmonizedSystemCode !== null) {
                $data['harmonizedSystemCode'] = $this->harmonizedSystemCode;
            }
            return $data;
        }
}
