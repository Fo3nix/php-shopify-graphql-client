<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * The list of all the countries from the combined shipping zones for the shop.
 */
class ShopifyCountriesInShippingZones
{
    protected $countryCodes;
    protected $includeRestOfWorld;

    
    /**
     * The list of all the countries from all the combined shipping zones.
     *
     * @return string[] ShopifyCountryCodeEnumObject values
     */
    public function getCountryCodes(): ?array
    {
        return $this->countryCodes;
    }

    
    /**
     * Whether 'Rest of World' has been defined in any of the shipping zones.
     *
     * @return bool
     */
    public function getIncludeRestOfWorld(): ?bool
    {
        return $this->includeRestOfWorld;
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
            if (isset($data['includeRestOfWorld']) && $data['includeRestOfWorld'] !== null) {
                $instance->includeRestOfWorld = $data['includeRestOfWorld'];
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
            if ($this->includeRestOfWorld !== null) {
                $data['includeRestOfWorld'] = $this->includeRestOfWorld;
            }
            return $data;
        }
}
