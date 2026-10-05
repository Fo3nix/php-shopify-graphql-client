<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAnalyticsTarget;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShopifyqlTableData;

class ShopifyShopifyqlQueryResponse
{
    protected $analyticsTargets;
    protected $parseErrors;
    protected $parseWarnings;
    protected $tableData;

    
    /**
     * @return ShopifyAnalyticsTarget[]
     */
    public function getAnalyticsTargets()
    {
        return $this->analyticsTargets;
    }

    
    /**
     * @return string[]
     */
    public function getParseErrors()
    {
        return $this->parseErrors;
    }

    
    /**
     * @return string[]
     */
    public function getParseWarnings()
    {
        return $this->parseWarnings;
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
