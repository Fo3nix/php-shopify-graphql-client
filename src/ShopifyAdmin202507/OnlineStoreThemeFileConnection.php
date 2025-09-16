<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OnlineStoreThemeFileEdge;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OnlineStoreThemeFile;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PageInfo;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OnlineStoreThemeFileReadResult;

class OnlineStoreThemeFileConnection
{
    protected $edges;
    protected $nodes;
    protected $pageInfo;
    protected $userErrors;

    
    /**
     * @return OnlineStoreThemeFileEdge[]
     */
    public function getEdges()
    {
        return $this->edges;
    }

    
    /**
     * @return OnlineStoreThemeFile[]
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    
    /**
     * @return PageInfo
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    
    /**
     * @return OnlineStoreThemeFileReadResult[]
     */
    public function getUserErrors()
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['edges']) && $data['edges'] !== null) {
                $instance->edges = array_map(function($item) { return OnlineStoreThemeFileEdge::fromArray($item); }, $data['edges']);
            }
            if (isset($data['nodes']) && $data['nodes'] !== null) {
                $instance->nodes = array_map(function($item) { return OnlineStoreThemeFile::fromArray($item); }, $data['nodes']);
            }
            if (isset($data['pageInfo']) && $data['pageInfo'] !== null) {
                $instance->pageInfo = PageInfo::fromArray($data['pageInfo']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return OnlineStoreThemeFileReadResult::fromArray($item); }, $data['userErrors']);
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
            if ($this->nodes !== null) {
                $data['nodes'] = array_map(function($item) { return $item->asArray(); }, $this->nodes);
            }
            if ($this->pageInfo !== null) {
                $data['pageInfo'] = $this->pageInfo->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
