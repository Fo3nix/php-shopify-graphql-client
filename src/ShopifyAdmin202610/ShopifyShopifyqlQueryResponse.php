<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAnalyticsTarget;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShopifyqlTableData;

/**
 * A response to a ShopifyQL query.
 */
class ShopifyShopifyqlQueryResponse
{
    protected $analyticsTargets;
    protected $parseErrors;
    protected $parseWarnings;
    protected $tableData;

    
    /**
     * A list of analytics targets that match the ShopifyQL query.
     * For target gauge queries, returns the matching target if one exists.
     * For `COMPARE TO targets` queries, returns matching targets for visualized metrics in `VISUALIZE` order.
     * Returns an empty list when no targets match or the ShopifyQL query cannot be matched.
     * Query `parseErrors` to detect invalid ShopifyQL.
     *
     * @return ShopifyAnalyticsTarget[]
     */
    public function getAnalyticsTargets(): ?array
    {
        return $this->analyticsTargets;
    }

    
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
     * A list of non-fatal parse warnings, such as use of a deprecated field. Unlike `parseErrors`, warnings are returned alongside results.
     *
     * @return string[]
     */
    public function getParseWarnings(): ?array
    {
        return $this->parseWarnings;
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
            if (isset($data['analyticsTargets']) && $data['analyticsTargets'] !== null) {
                $instance->analyticsTargets = array_map(function($item) { return ShopifyAnalyticsTarget::fromArray($item); }, $data['analyticsTargets']);
            }
            if (isset($data['parseErrors']) && $data['parseErrors'] !== null) {
                $instance->parseErrors = $data['parseErrors'];
            }
            if (isset($data['parseWarnings']) && $data['parseWarnings'] !== null) {
                $instance->parseWarnings = $data['parseWarnings'];
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
            if ($this->analyticsTargets !== null) {
                $data['analyticsTargets'] = array_map(function($item) { return $item->asArray(); }, $this->analyticsTargets);
            }
            if ($this->parseErrors !== null) {
                $data['parseErrors'] = $this->parseErrors;
            }
            if ($this->parseWarnings !== null) {
                $data['parseWarnings'] = $this->parseWarnings;
            }
            if ($this->tableData !== null) {
                $data['tableData'] = $this->tableData->asArray();
            }
            return $data;
        }
}
