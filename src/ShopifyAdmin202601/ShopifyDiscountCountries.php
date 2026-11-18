<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * Defines the geographic scope where a shipping discount can be applied based on customer shipping destinations. This configuration determines which countries are eligible for the promotional offer.
 *
 * For example, a "Free Shipping to EU" promotion would specify European Union countries, while a domestic-only sale might target just the store's home country.
 *
 * The object includes both specific country selections and an option to include all remaining countries not explicitly listed, providing flexible geographic targeting for international merchants.
 */
class ShopifyDiscountCountries
{
    protected $countries;
    protected $includeRestOfWorld;

    
    /**
     * The codes for the countries where the discount can be applied.
     *
     * @return string[] ShopifyCountryCodeEnumObject values
     */
    public function getCountries(): ?array
    {
        return $this->countries;
    }

    
    /**
     * Whether the discount is applicable to countries that haven't been defined in the shop's shipping zones.
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
