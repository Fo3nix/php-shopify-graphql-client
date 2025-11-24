<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCompanyLocationStaffMemberAssignmentEdge;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCompanyLocationStaffMemberAssignment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyPageInfo;

class ShopifyCompanyLocationStaffMemberAssignmentConnection
{
    protected $edges;
    protected $nodes;
    protected $pageInfo;

    
    /**
     * @return ShopifyCompanyLocationStaffMemberAssignmentEdge[]
     */
    public function getEdges()
    {
        return $this->edges;
    }

    
    /**
     * @return ShopifyCompanyLocationStaffMemberAssignment[]
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
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['edges']) && $data['edges'] !== null) {
                $instance->edges = array_map(function($item) { return ShopifyCompanyLocationStaffMemberAssignmentEdge::fromArray($item); }, $data['edges']);
            }
            if (isset($data['nodes']) && $data['nodes'] !== null) {
                $instance->nodes = array_map(function($item) { return ShopifyCompanyLocationStaffMemberAssignment::fromArray($item); }, $data['nodes']);
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
