<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyAppInstallationEdge;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyAppInstallation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPageInfo;

/**
 * An auto-generated type for paginating through multiple AppInstallations.
 */
class ShopifyAppInstallationConnection
{
    protected $edges;
    protected $nodes;
    protected $pageInfo;

    
    /**
     * The connection between the node and its parent. Each edge contains a minimum of the edge's cursor and the node.
     *
     * @return ShopifyAppInstallationEdge[]
     */
    public function getEdges(): ?array
    {
        return $this->edges;
    }

    
    /**
     * A list of nodes that are contained in AppInstallationEdge. You can fetch data about an individual node, or you can follow the edges to fetch data about a collection of related nodes. At each node, you specify the fields that you want to retrieve.
     *
     * @return ShopifyAppInstallation[]
     */
    public function getNodes(): ?array
    {
        return $this->nodes;
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
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['edges']) && $data['edges'] !== null) {
                $instance->edges = array_map(function($item) { return ShopifyAppInstallationEdge::fromArray($item); }, $data['edges']);
            }
            if (isset($data['nodes']) && $data['nodes'] !== null) {
                $instance->nodes = array_map(function($item) { return ShopifyAppInstallation::fromArray($item); }, $data['nodes']);
            }
            if (isset($data['pageInfo']) && $data['pageInfo'] !== null) {
                $instance->pageInfo = ShopifyPageInfo::fromArray($data['pageInfo']);
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
            return $data;
        }
}
