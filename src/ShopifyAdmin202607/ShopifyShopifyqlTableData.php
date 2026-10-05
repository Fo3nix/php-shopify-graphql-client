<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyqlTableDataColumn;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyqlRowMetadata;

class ShopifyShopifyqlTableData
{
    protected $columns;
    protected $rowMetadata;
    protected $rows;

    
    /**
     * @return ShopifyShopifyqlTableDataColumn[]
     */
    public function getColumns()
    {
        return $this->columns;
    }

    
    /**
     * @return ShopifyShopifyqlRowMetadata[]
     */
    public function getRowMetadata()
    {
        return $this->rowMetadata;
    }

    
    /**
     * @return string
     */
    public function getRows()
    {
        return $this->rows;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['columns']) && $data['columns'] !== null) {
                $instance->columns = array_map(function($item) { return ShopifyShopifyqlTableDataColumn::fromArray($item); }, $data['columns']);
            }
            if (isset($data['rowMetadata']) && $data['rowMetadata'] !== null) {
                $instance->rowMetadata = array_map(function($item) { return ShopifyShopifyqlRowMetadata::fromArray($item); }, $data['rowMetadata']);
            }
            if (isset($data['rows']) && $data['rows'] !== null) {
                $instance->rows = $data['rows'];
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
            if ($this->columns !== null) {
                $data['columns'] = array_map(function($item) { return $item->asArray(); }, $this->columns);
            }
            if ($this->rowMetadata !== null) {
                $data['rowMetadata'] = array_map(function($item) { return $item->asArray(); }, $this->rowMetadata);
            }
            if ($this->rows !== null) {
                $data['rows'] = $this->rows;
            }
            return $data;
        }
}
