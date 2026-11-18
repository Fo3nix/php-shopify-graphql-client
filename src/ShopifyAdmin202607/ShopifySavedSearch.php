<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySearchFilter;

/**
 * A representation of a search query in the Shopify admin used on resource index views. Preserves complex queries with search terms and filters, enabling merchants to quickly access frequently used data views. For example, a saved search can be applied to the product index table to filter products. The query string combines free-text search terms with structured filters to narrow results based on resource attributes.
 *
 * The search applies to a specific resource type such as [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer), [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product), [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order), or [`Collection`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection) objects.
 */
class ShopifySavedSearch implements ShopifyLegacyInteroperability, ShopifyNode
{
    protected $filters;
    protected $id;
    protected $legacyResourceId;
    protected $name;
    protected $resourceType;
    protected $searchTerms;

    
    /**
     * The filters of a saved search.
     *
     * @return ShopifySearchFilter[]
     */
    public function getFilters(): ?array
    {
        return $this->filters;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The ID of the corresponding resource in the REST Admin API.
     *
     * @return string
     */
    public function getLegacyResourceId(): mixed
    {
        return $this->legacyResourceId;
    }

    
    /**
     * The name of a saved search.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The type of resource this saved search is searching in.
     *
     * @return string A ShopifySearchResultTypeEnumObject value
     */
    public function getResourceType(): ?string
    {
        return $this->resourceType;
    }

    
    /**
     * The search terms of a saved search.
     *
     * @return string
     */
    public function getSearchTerms(): ?string
    {
        return $this->searchTerms;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['filters']) && $data['filters'] !== null) {
                $instance->filters = array_map(function($item) { return ShopifySearchFilter::fromArray($item); }, $data['filters']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['resourceType']) && $data['resourceType'] !== null) {
                $instance->resourceType = $data['resourceType'];
            }
            if (isset($data['searchTerms']) && $data['searchTerms'] !== null) {
                $instance->searchTerms = $data['searchTerms'];
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
            if ($this->filters !== null) {
                $data['filters'] = array_map(function($item) { return $item->asArray(); }, $this->filters);
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->resourceType !== null) {
                $data['resourceType'] = $this->resourceType;
            }
            if ($this->searchTerms !== null) {
                $data['searchTerms'] = $this->searchTerms;
            }
            return $data;
        }
}
