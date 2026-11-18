<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDeliveryOptionDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCount;

/**
 * The shipping configuration attached to a market. Defines the shipping
 * options available when a buyer is resolved to that market.
 */
class ShopifyShippingConfiguration
{
    protected $isEnabled;
    protected $optionDefinitions;
    protected $optionDefinitionsCount;

    
    /**
     * Whether shipping is enabled for this market. When false, customers in this market won't see any shipping options.
     *
     * @return bool
     */
    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    
    /**
     * The shipping options configured for this market.
     *
     * @return ShopifyDeliveryOptionDefinitionConnection
     */
    public function getOptionDefinitions(): ?ShopifyDeliveryOptionDefinitionConnection
    {
        return $this->optionDefinitions;
    }

    
    /**
     * The number of shipping options in this configuration.
     *
     * @return ShopifyCount
     */
    public function getOptionDefinitionsCount(): ?ShopifyCount
    {
        return $this->optionDefinitionsCount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['isEnabled']) && $data['isEnabled'] !== null) {
                $instance->isEnabled = $data['isEnabled'];
            }
            if (isset($data['optionDefinitions']) && $data['optionDefinitions'] !== null) {
                $instance->optionDefinitions = ShopifyDeliveryOptionDefinitionConnection::fromArray($data['optionDefinitions']);
            }
            if (isset($data['optionDefinitionsCount']) && $data['optionDefinitionsCount'] !== null) {
                $instance->optionDefinitionsCount = ShopifyCount::fromArray($data['optionDefinitionsCount']);
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
            if ($this->isEnabled !== null) {
                $data['isEnabled'] = $this->isEnabled;
            }
            if ($this->optionDefinitions !== null) {
                $data['optionDefinitions'] = $this->optionDefinitions->asArray();
            }
            if ($this->optionDefinitionsCount !== null) {
                $data['optionDefinitionsCount'] = $this->optionDefinitionsCount->asArray();
            }
            return $data;
        }
}
