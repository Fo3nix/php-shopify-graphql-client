<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMarketRegionConnection;

/**
 * A condition checking the visitor's region.
 */
class ShopifyRegionsCondition
{
    protected $applicationLevel;
    protected $regions;

    
    /**
     * The application level for the condition.
     *
     * @return string A ShopifyMarketConditionApplicationTypeEnumObject value
     */
    public function getApplicationLevel(): ?string
    {
        return $this->applicationLevel;
    }

    
    /**
     * The regions that comprise the market.
     *
     * @return ShopifyMarketRegionConnection
     */
    public function getRegions(): ?ShopifyMarketRegionConnection
    {
        return $this->regions;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['applicationLevel']) && $data['applicationLevel'] !== null) {
                $instance->applicationLevel = $data['applicationLevel'];
            }
            if (isset($data['regions']) && $data['regions'] !== null) {
                $instance->regions = ShopifyMarketRegionConnection::fromArray($data['regions']);
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
            if ($this->applicationLevel !== null) {
                $data['applicationLevel'] = $this->applicationLevel;
            }
            if ($this->regions !== null) {
                $data['regions'] = $this->regions->asArray();
            }
            return $data;
        }
}
