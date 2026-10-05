<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyqlTableData;

class ShopifyShopifyqlQueryResponse
{
    protected $parseErrors;
    protected $tableData;

    
    /**
     * @return string[]
     */
    public function getParseErrors()
    {
        return $this->parseErrors;
    }

    
    /**
     * @return ShopifyShopifyqlTableData
     */
    public function getTableData()
    {
        return $this->tableData;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['parseErrors']) && $data['parseErrors'] !== null) {
                $instance->parseErrors = $data['parseErrors'];
            }
            if (isset($data['tableData']) && $data['tableData'] !== null) {
                $instance->tableData = ShopifyShopifyqlTableData::fromArray($data['tableData']);
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
            if ($this->parseErrors !== null) {
                $data['parseErrors'] = $this->parseErrors;
            }
            if ($this->tableData !== null) {
                $data['tableData'] = $this->tableData->asArray();
            }
            return $data;
        }
}
