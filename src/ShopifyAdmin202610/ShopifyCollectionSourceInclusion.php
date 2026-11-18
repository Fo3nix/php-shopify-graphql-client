<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionSourceInclusionConditionHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionSourceInclusionCondition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionInclusionProductSelectionConnection;

/**
 * Defines the rules and selections for including products in a collection.
 */
class ShopifyCollectionSourceInclusion
{
    protected $conditions;
    protected $matchType;
    protected $selections;

    
    /**
     * The conditions that determine which products are included in the collection.
     *
     * @return ShopifyCollectionSourceInclusionCondition[]
     */
    public function getConditions(): ?array
    {
        return $this->conditions;
    }

    
    /**
     * Specifies whether products must match any or all conditions. Only relevant when conditions are present.
     *
     * @return string A ShopifyCollectionConditionMatchTypeEnumObject value
     */
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    
    /**
     * The products that have been manually selected for inclusion in the collection.
     *
     * @return ShopifyCollectionInclusionProductSelectionConnection
     */
    public function getSelections(): ?ShopifyCollectionInclusionProductSelectionConnection
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
                $instance->conditions = array_map(function($item) { return ShopifyCollectionSourceInclusionConditionHydrator::fromArray($item); }, $data['conditions']);
            }
            if (isset($data['matchType']) && $data['matchType'] !== null) {
                $instance->matchType = $data['matchType'];
            }
            if (isset($data['selections']) && $data['selections'] !== null) {
                $instance->selections = ShopifyCollectionInclusionProductSelectionConnection::fromArray($data['selections']);
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
                $data['conditions'] = array_map(function($item) { return ShopifyCollectionSourceInclusionConditionHydrator::toArray($item); }, $this->conditions);
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
