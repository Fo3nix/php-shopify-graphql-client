<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * A country or region code.
 */
class ShopifyConsentPolicyRegion
{
    protected $countryCode;
    protected $regionCode;

    
    /**
     * The `ISO 3166` country code for which the policy applies.
     *
     * @return string A ShopifyPrivacyCountryCodeEnumObject value
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    
    /**
     * The `ISO 3166` region code for which the policy applies.
     *
     * @return string
     */
    public function getRegionCode(): ?string
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
