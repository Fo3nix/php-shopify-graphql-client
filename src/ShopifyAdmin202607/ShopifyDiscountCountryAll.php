<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Indicates that a shipping discount applies to all countries without restriction, enabling merchants to create truly global promotions. This object represents universal geographic eligibility for shipping discount offers.
 *
 * For example, an online store launching a "Worldwide Free Shipping" campaign would use this configuration to ensure customers from any country can benefit from the promotion.
 *
 * This setting simplifies international discount management by eliminating the need to manually select individual countries or regions, making it ideal for digital products or stores with comprehensive global shipping capabilities.
 */
class ShopifyDiscountCountryAll
{
    protected $allCountries;

    
    /**
     * Whether the discount can be applied to all countries as shipping destination. This value is always `true`.
     *
     * @return bool
     */
    public function getAllCountries(): ?bool
    {
        return $this->allCountries;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['allCountries']) && $data['allCountries'] !== null) {
                $instance->allCountries = $data['allCountries'];
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
            if ($this->allCountries !== null) {
                $data['allCountries'] = $this->allCountries;
            }
            return $data;
        }
}
