<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

class ShopifyShopifyqlTableDataColumn
{
    protected $dataType;
    protected $displayName;
    protected $name;
    protected $subType;

    
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
            if (isset($data['dataType']) && $data['dataType'] !== null) {
                $instance->dataType = $data['dataType'];
            }
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
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
            if ($this->dataType !== null) {
                $data['dataType'] = $this->dataType;
            }
            if ($this->displayName !== null) {
                $data['displayName'] = $this->displayName;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->subType !== null) {
                $data['subType'] = $this->subType;
            }
            return $data;
        }
}
