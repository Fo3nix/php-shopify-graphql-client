<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class MarketPriceInclusions
{
    protected $inclusiveDutiesPricingStrategy;
    protected $inclusiveTaxPricingStrategy;

    
    /**
     * @return InclusiveDutiesPricingStrategyEnumObject
     */
    public function getInclusiveDutiesPricingStrategy()
    {
        return $this->inclusiveDutiesPricingStrategy;
    }

    
    /**
     * @return InclusiveTaxPricingStrategyEnumObject
     */
    public function getInclusiveTaxPricingStrategy()
    {
        return $this->inclusiveTaxPricingStrategy;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['inclusiveDutiesPricingStrategy']) && $data['inclusiveDutiesPricingStrategy'] !== null) {
                $instance->inclusiveDutiesPricingStrategy = $data['inclusiveDutiesPricingStrategy'];
            }
            if (isset($data['inclusiveTaxPricingStrategy']) && $data['inclusiveTaxPricingStrategy'] !== null) {
                $instance->inclusiveTaxPricingStrategy = $data['inclusiveTaxPricingStrategy'];
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
            if ($this->inclusiveDutiesPricingStrategy !== null) {
                $data['inclusiveDutiesPricingStrategy'] = $this->inclusiveDutiesPricingStrategy;
            }
            if ($this->inclusiveTaxPricingStrategy !== null) {
                $data['inclusiveTaxPricingStrategy'] = $this->inclusiveTaxPricingStrategy;
            }
            return $data;
        }
}
