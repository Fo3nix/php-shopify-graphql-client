<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * The inclusive pricing strategy for a market.
 */
class ShopifyMarketPriceInclusions
{
    protected $adaptivePricingEnabled;
    protected $inclusiveDutiesPricingStrategy;
    protected $inclusiveTaxPricingStrategy;

    
    /**
     * Whether adaptive pricing is enabled for the market. Only applicable to Managed Markets and must be ignored otherwise.
     *
     * @return bool
     */
    public function getAdaptivePricingEnabled(): ?bool
    {
        return $this->adaptivePricingEnabled;
    }

    
    /**
     * The inclusive duties pricing strategy of the market. This determines if prices include duties.
     *
     * @return string A ShopifyInclusiveDutiesPricingStrategyEnumObject value
     */
    public function getInclusiveDutiesPricingStrategy(): ?string
    {
        return $this->inclusiveDutiesPricingStrategy;
    }

    
    /**
     * The inclusive tax pricing strategy of the market. This determines if prices include taxes.
     *
     * @return string A ShopifyInclusiveTaxPricingStrategyEnumObject value
     */
    public function getInclusiveTaxPricingStrategy(): ?string
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
            if (isset($data['adaptivePricingEnabled']) && $data['adaptivePricingEnabled'] !== null) {
                $instance->adaptivePricingEnabled = $data['adaptivePricingEnabled'];
            }
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
            if ($this->adaptivePricingEnabled !== null) {
                $data['adaptivePricingEnabled'] = $this->adaptivePricingEnabled;
            }
            if ($this->inclusiveDutiesPricingStrategy !== null) {
                $data['inclusiveDutiesPricingStrategy'] = $this->inclusiveDutiesPricingStrategy;
            }
            if ($this->inclusiveTaxPricingStrategy !== null) {
                $data['inclusiveTaxPricingStrategy'] = $this->inclusiveTaxPricingStrategy;
            }
            return $data;
        }
}
