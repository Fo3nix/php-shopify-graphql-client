<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOnlineStoreThemeFileEdge;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOnlineStoreThemeFile;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPageInfo;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOnlineStoreThemeFileReadResult;

class ShopifyOnlineStoreThemeFileConnection
{
    protected $edges;
    protected $nodes;
    protected $pageInfo;
    protected $userErrors;

    
    /**
     * @return ShopifyOnlineStoreThemeFileEdge[]
     */
    public function getEdges()
    {
        return $this->edges;
    }

    
    /**
     * @return ShopifyOnlineStoreThemeFile[]
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    
    /**
     * @return ShopifyPageInfo
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    
    /**
     * @return ShopifyOnlineStoreThemeFileReadResult[]
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
                $instance->edges = array_map(function($item) { return ShopifyOnlineStoreThemeFileEdge::fromArray($item); }, $data['edges']);
            }
            if (isset($data['nodes']) && $data['nodes'] !== null) {
                $instance->nodes = array_map(function($item) { return ShopifyOnlineStoreThemeFile::fromArray($item); }, $data['nodes']);
            }
            if (isset($data['pageInfo']) && $data['pageInfo'] !== null) {
                $instance->pageInfo = ShopifyPageInfo::fromArray($data['pageInfo']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyOnlineStoreThemeFileReadResult::fromArray($item); }, $data['userErrors']);
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
