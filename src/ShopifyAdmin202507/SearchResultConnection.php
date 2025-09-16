<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SearchResultEdge;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PageInfo;

class SearchResultConnection
{
    protected $edges;
    protected $pageInfo;
    protected $resultsAfterCount;

    
    /**
     * @return SearchResultEdge[]
     */
    public function getEdges()
    {
        return $this->edges;
    }

    
    /**
     * @return PageInfo
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    
    /**
     * @return int
     */
    public function getResultsAfterCount()
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
                $instance->edges = array_map(function($item) { return SearchResultEdge::fromArray($item); }, $data['edges']);
            }
            if (isset($data['pageInfo']) && $data['pageInfo'] !== null) {
                $instance->pageInfo = PageInfo::fromArray($data['pageInfo']);
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
