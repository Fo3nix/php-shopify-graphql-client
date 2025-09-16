<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class DiscountCountries
{
    protected $countries;
    protected $includeRestOfWorld;

    
    /**
     * @return CountryCodeEnumObject[]
     */
    public function getCountries()
    {
        return $this->countries;
    }

    
    /**
     * @return bool
     */
    public function getIncludeRestOfWorld()
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
            if (isset($data['countries']) && $data['countries'] !== null) {
                $instance->countries = $data['countries'];
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
            if ($this->countries !== null) {
                $data['countries'] = $this->countries;
            }
            if ($this->includeRestOfWorld !== null) {
                $data['includeRestOfWorld'] = $this->includeRestOfWorld;
            }
            return $data;
        }
}
