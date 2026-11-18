<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * The shipping lines to which the price rule applies to.
 */
class ShopifyPriceRuleShippingLineEntitlements
{
    protected $countryCodes;
    protected $includeRestOfWorld;
    protected $targetAllShippingLines;

    
    /**
     * The codes for the countries to which the price rule applies to.
     *
     * @return string[] ShopifyCountryCodeEnumObject values
     */
    public function getCountryCodes(): ?array
    {
        return $this->countryCodes;
    }

    
    /**
     * Whether the price rule is applicable to countries that haven't been defined in the shop's shipping zones.
     *
     * @return bool
     */
    public function getIncludeRestOfWorld(): ?bool
    {
        return $this->includeRestOfWorld;
    }

    
    /**
     * Whether the price rule applies to all shipping lines.
     *
     * @return bool
     */
    public function getTargetAllShippingLines(): ?bool
    {
        return $this->targetAllShippingLines;
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
            if (isset($data['targetAllShippingLines']) && $data['targetAllShippingLines'] !== null) {
                $instance->targetAllShippingLines = $data['targetAllShippingLines'];
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
            if ($this->targetAllShippingLines !== null) {
                $data['targetAllShippingLines'] = $this->targetAllShippingLines;
            }
            return $data;
        }
}
