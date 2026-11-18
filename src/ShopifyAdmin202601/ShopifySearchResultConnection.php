<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySearchResultEdge;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPageInfo;

/**
 * The connection type for SearchResult.
 */
class ShopifySearchResultConnection
{
    protected $edges;
    protected $pageInfo;
    protected $resultsAfterCount;

    
    /**
     * The connection between the node and its parent. Each edge contains a minimum of the edge's cursor and the node.
     *
     * @return ShopifySearchResultEdge[]
     */
    public function getEdges(): ?array
    {
        return $this->edges;
    }

    
    /**
     * An object that’s used to retrieve [cursor information](https://shopify.dev/api/usage/pagination-graphql) about the current page.
     *
     * @return ShopifyPageInfo
     */
    public function getPageInfo(): ?ShopifyPageInfo
    {
        return $this->pageInfo;
    }

    
    /**
     * An object that’s used to retrieve [cursor information](https://shopify.dev/api/usage/pagination-graphql) about the current page.
     *
     * @return int
     */
    public function getResultsAfterCount(): ?int
    {
        return $this->resultsAfterCount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['edges']) && $data['edges'] !== null) {
                $instance->edges = array_map(function($item) { return ShopifySearchResultEdge::fromArray($item); }, $data['edges']);
            }
            if (isset($data['pageInfo']) && $data['pageInfo'] !== null) {
                $instance->pageInfo = ShopifyPageInfo::fromArray($data['pageInfo']);
            }
            if (isset($data['resultsAfterCount']) && $data['resultsAfterCount'] !== null) {
                $instance->resultsAfterCount = $data['resultsAfterCount'];
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
            if ($this->edges !== null) {
                $data['edges'] = array_map(function($item) { return $item->asArray(); }, $this->edges);
            }
            if ($this->pageInfo !== null) {
                $data['pageInfo'] = $this->pageInfo->asArray();
            }
            if ($this->resultsAfterCount !== null) {
                $data['resultsAfterCount'] = $this->resultsAfterCount;
            }
            return $data;
        }
}
