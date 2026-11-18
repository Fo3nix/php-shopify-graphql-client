<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyqlDynamicColumnMetadata;

/**
 * Represents a column in a ShopifyQL query response.
 */
class ShopifyShopifyqlTableDataColumn
{
    protected $columnOrigin;
    protected $dataType;
    protected $displayName;
    protected $dynamicColumnMetadata;
    protected $name;
    protected $shortDisplayName;
    protected $subType;

    
    /**
     * Whether the column was explicitly requested in the query or dynamically generated.
     *
     * @return string A ShopifyShopifyqlColumnOriginEnumObject value
     */
    public function getColumnOrigin(): ?string
    {
        return $this->columnOrigin;
    }

    
    /**
     * The data type of the column.
     *
     * @return string A ShopifyColumnDataTypeEnumObject value
     */
    public function getDataType(): ?string
    {
        return $this->dataType;
    }

    
    /**
     * The human-readable display name of the column.
     *
     * @return string
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    
    /**
     * Metadata describing how a dynamic column was generated (comparison, totals, benchmark, attribution, etc.). Null for non-dynamic columns.
     *
     * @return ShopifyShopifyqlDynamicColumnMetadata
     */
    public function getDynamicColumnMetadata(): ?ShopifyShopifyqlDynamicColumnMetadata
    {
        return $this->dynamicColumnMetadata;
    }

    
    /**
     * The name of the column.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * A shortened display name for the column, suitable for compact UI such as metric tiles.
     *
     * @return string
     */
    public function getShortDisplayName(): ?string
    {
        return $this->shortDisplayName;
    }

    
    /**
     * The element type of an array column or DAY_DURATION for a range column.
     *
     * @return string A ShopifyColumnDataTypeEnumObject value
     */
    public function getSubType(): ?string
    {
        return $this->subType;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['columnOrigin']) && $data['columnOrigin'] !== null) {
                $instance->columnOrigin = $data['columnOrigin'];
            }
            if (isset($data['dataType']) && $data['dataType'] !== null) {
                $instance->dataType = $data['dataType'];
            }
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['dynamicColumnMetadata']) && $data['dynamicColumnMetadata'] !== null) {
                $instance->dynamicColumnMetadata = ShopifyShopifyqlDynamicColumnMetadata::fromArray($data['dynamicColumnMetadata']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['shortDisplayName']) && $data['shortDisplayName'] !== null) {
                $instance->shortDisplayName = $data['shortDisplayName'];
            }
            if (isset($data['subType']) && $data['subType'] !== null) {
                $instance->subType = $data['subType'];
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
            if ($this->columnOrigin !== null) {
                $data['columnOrigin'] = $this->columnOrigin;
            }
            if ($this->dataType !== null) {
                $data['dataType'] = $this->dataType;
            }
            if ($this->displayName !== null) {
                $data['displayName'] = $this->displayName;
            }
            if ($this->dynamicColumnMetadata !== null) {
                $data['dynamicColumnMetadata'] = $this->dynamicColumnMetadata->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->shortDisplayName !== null) {
                $data['shortDisplayName'] = $this->shortDisplayName;
            }
            if ($this->subType !== null) {
                $data['subType'] = $this->subType;
            }
            return $data;
        }
}
