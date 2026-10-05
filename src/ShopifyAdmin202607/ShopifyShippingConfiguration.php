<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDeliveryOptionDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCount;

class ShopifyShippingConfiguration
{
    protected $isEnabled;
    protected $optionDefinitions;
    protected $optionDefinitionsCount;

    
    /**
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    
    /**
     * @return ShopifyDeliveryOptionDefinitionConnection
     */
    public function getOptionDefinitions()
    {
        return $this->optionDefinitions;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getOptionDefinitionsCount()
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
