<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * Represents a column in a ShopifyQL query response.
 */
class ShopifyShopifyqlTableDataColumn
{
    protected $dataType;
    protected $displayName;
    protected $name;
    protected $subType;

    
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
     * The name of the column.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
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
