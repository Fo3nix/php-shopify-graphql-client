<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyqlDynamicColumnMetadata;

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
     * @return ShopifyShopifyqlColumnOriginEnumObject
     */
    public function getColumnOrigin()
    {
        return $this->columnOrigin;
    }

    
    /**
     * @return ShopifyColumnDataTypeEnumObject
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    
    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    
    /**
     * @return ShopifyShopifyqlDynamicColumnMetadata
     */
    public function getDynamicColumnMetadata()
    {
        return $this->dynamicColumnMetadata;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return string
     */
    public function getShortDisplayName()
    {
        return $this->shortDisplayName;
    }

    
    /**
     * @return ShopifyColumnDataTypeEnumObject
     */
    public function getSubType()
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
