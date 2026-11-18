<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionSourceExclusionConditionHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionSourceExclusionCondition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionExclusionProductSelectionConnection;

/**
 * Defines the rules and selections for excluding products from a collection.
 */
class ShopifyCollectionSourceExclusion
{
    protected $conditions;
    protected $matchType;
    protected $selections;

    
    /**
     * The conditions that determine which products are excluded from the collection.
     *
     * @return ShopifyCollectionSourceExclusionCondition[]
     */
    public function getConditions(): ?array
    {
        return $this->conditions;
    }

    
    /**
     * Specifies whether products must match any or all non-collection exclusion conditions. Collection exclusion
     * conditions are always applied independently with ANY semantics, so this field returns ANY for
     * collection-only exclusions and null when collection and non-collection exclusion conditions are mixed.
     *
     * @return string A ShopifyCollectionConditionMatchTypeEnumObject value
     */
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    
    /**
     * The products that have been manually selected for exclusion from the collection.
     *
     * @return ShopifyCollectionExclusionProductSelectionConnection
     */
    public function getSelections(): ?ShopifyCollectionExclusionProductSelectionConnection
    {
        return $this->selections;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['conditions']) && $data['conditions'] !== null) {
                $instance->conditions = array_map(function($item) { return ShopifyCollectionSourceExclusionConditionHydrator::fromArray($item); }, $data['conditions']);
            }
            if (isset($data['matchType']) && $data['matchType'] !== null) {
                $instance->matchType = $data['matchType'];
            }
            if (isset($data['selections']) && $data['selections'] !== null) {
                $instance->selections = ShopifyCollectionExclusionProductSelectionConnection::fromArray($data['selections']);
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
            if ($this->conditions !== null) {
                $data['conditions'] = array_map(function($item) { return ShopifyCollectionSourceExclusionConditionHydrator::toArray($item); }, $this->conditions);
            }
            if ($this->matchType !== null) {
                $data['matchType'] = $this->matchType;
            }
            if ($this->selections !== null) {
                $data['selections'] = $this->selections->asArray();
            }
            return $data;
        }
}
