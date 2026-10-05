<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySegmentAttributeStatistics;

class ShopifySegmentStatistics
{
    protected $attributeStatistics;

    
    /**
     * @return ShopifySegmentAttributeStatistics
     */
    public function getAttributeStatistics()
    {
        return $this->attributeStatistics;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['attributeStatistics']) && $data['attributeStatistics'] !== null) {
                $instance->attributeStatistics = ShopifySegmentAttributeStatistics::fromArray($data['attributeStatistics']);
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
            if ($this->attributeStatistics !== null) {
                $data['attributeStatistics'] = $this->attributeStatistics->asArray();
            }
            return $data;
        }
}
