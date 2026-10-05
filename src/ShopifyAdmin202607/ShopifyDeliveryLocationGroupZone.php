<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDeliveryMethodDefinitionCounts;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDeliveryMethodDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDeliveryZone;

class ShopifyDeliveryLocationGroupZone
{
    protected $methodDefinitionCounts;
    protected $methodDefinitions;
    protected $zone;

    
    /**
     * @return ShopifyDeliveryMethodDefinitionCounts
     */
    public function getMethodDefinitionCounts()
    {
        return $this->methodDefinitionCounts;
    }

    
    /**
     * @return ShopifyDeliveryMethodDefinitionConnection
     */
    public function getMethodDefinitions()
    {
        return $this->methodDefinitions;
    }

    
    /**
     * @return ShopifyDeliveryZone
     */
    public function getZone()
    {
        return $this->zone;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['methodDefinitionCounts']) && $data['methodDefinitionCounts'] !== null) {
                $instance->methodDefinitionCounts = ShopifyDeliveryMethodDefinitionCounts::fromArray($data['methodDefinitionCounts']);
            }
            if (isset($data['methodDefinitions']) && $data['methodDefinitions'] !== null) {
                $instance->methodDefinitions = ShopifyDeliveryMethodDefinitionConnection::fromArray($data['methodDefinitions']);
            }
            if (isset($data['zone']) && $data['zone'] !== null) {
                $instance->zone = ShopifyDeliveryZone::fromArray($data['zone']);
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
            if ($this->methodDefinitionCounts !== null) {
                $data['methodDefinitionCounts'] = $this->methodDefinitionCounts->asArray();
            }
            if ($this->methodDefinitions !== null) {
                $data['methodDefinitions'] = $this->methodDefinitions->asArray();
            }
            if ($this->zone !== null) {
                $data['zone'] = $this->zone->asArray();
            }
            return $data;
        }
}
