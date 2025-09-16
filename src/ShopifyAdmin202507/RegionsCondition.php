<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketRegionConnection;

class RegionsCondition
{
    protected $applicationLevel;
    protected $regions;

    
    /**
     * @return MarketConditionApplicationTypeEnumObject
     */
    public function getApplicationLevel()
    {
        return $this->applicationLevel;
    }

    
    /**
     * @return MarketRegionConnection
     */
    public function getRegions()
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
                $instance->regions = MarketRegionConnection::fromArray($data['regions']);
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
