<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyShopifyqlDynamicColumnMetadata
{
    protected $aggregatedBy;
    protected $comparisonReference;
    protected $originalColumnName;
    protected $type;

    
    /**
     * @return string[]
     */
    public function getAggregatedBy()
    {
        return $this->aggregatedBy;
    }

    
    /**
     * @return string
     */
    public function getComparisonReference()
    {
        return $this->comparisonReference;
    }

    
    /**
     * @return string
     */
    public function getOriginalColumnName()
    {
        return $this->originalColumnName;
    }

    
    /**
     * @return ShopifyShopifyqlDynamicColumnTypeEnumObject
     */
    public function getType()
    {
        return $this->type;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['aggregatedBy']) && $data['aggregatedBy'] !== null) {
                $instance->aggregatedBy = $data['aggregatedBy'];
            }
            if (isset($data['comparisonReference']) && $data['comparisonReference'] !== null) {
                $instance->comparisonReference = $data['comparisonReference'];
            }
            if (isset($data['originalColumnName']) && $data['originalColumnName'] !== null) {
                $instance->originalColumnName = $data['originalColumnName'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
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
            if ($this->aggregatedBy !== null) {
                $data['aggregatedBy'] = $this->aggregatedBy;
            }
            if ($this->comparisonReference !== null) {
                $data['comparisonReference'] = $this->comparisonReference;
            }
            if ($this->originalColumnName !== null) {
                $data['originalColumnName'] = $this->originalColumnName;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            return $data;
        }
}
