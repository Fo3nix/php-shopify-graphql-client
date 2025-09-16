<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SearchFilter;

class SavedSearch
{
    protected $filters;
    protected $id;
    protected $legacyResourceId;
    protected $name;
    protected $resourceType;
    protected $searchTerms;

    
    /**
     * @return SearchFilter[]
     */
    public function getFilters()
    {
        return $this->filters;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return SearchResultTypeEnumObject
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    
    /**
     * @return string
     */
    public function getSearchTerms()
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
                $instance->filters = array_map(function($item) { return SearchFilter::fromArray($item); }, $data['filters']);
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
