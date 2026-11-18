<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopifyqlTableData;

/**
 * A response to a ShopifyQL query.
 */
class ShopifyShopifyqlQueryResponse
{
    protected $parseErrors;
    protected $tableData;

    
    /**
     * A list of parse errors, if parsing fails.
     *
     * @return string[]
     */
    public function getParseErrors(): ?array
    {
        return $this->parseErrors;
    }

    
    /**
     * The result in a tabular format with column and row data.
     *
     * @return ShopifyShopifyqlTableData
     */
    public function getTableData(): ?ShopifyShopifyqlTableData
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
