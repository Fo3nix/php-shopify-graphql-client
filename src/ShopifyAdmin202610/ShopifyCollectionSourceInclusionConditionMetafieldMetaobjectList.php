<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetaobject;

/**
 * A condition based on list of metaobject reference metafield values for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectList implements ShopifyCollectionSourceInclusionCondition, ShopifyCollectionSourceInclusionConditionMetafield
{
    protected $definition;
    protected $id;
    protected $matchType;
    protected $relation;
    protected $values;

    
    /**
     * The metafield definition to use for the condition.
     *
     * @return ShopifyMetafieldDefinition
     */
    public function getDefinition(): ?ShopifyMetafieldDefinition
    {
        return $this->definition;
    }

    
    /**
     * The unique identifier for this condition.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Determines how many values a metafield must match against in order to satisfy this condition. Will be either at least one given value, or all of the given values.
     *
     * @return string A ShopifyCollectionConditionMatchTypeEnumObject value
     */
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    
    /**
     * The relationship between the metafield value and the condition values.
     *
     * @return string A ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectListRelationEnumObject value
     */
    public function getRelation(): ?string
    {
        return $this->relation;
    }

    
    /**
     * The metaobjects to match against.
     *
     * @return ShopifyMetaobject[]
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['definition']) && $data['definition'] !== null) {
                $instance->definition = ShopifyMetafieldDefinition::fromArray($data['definition']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['matchType']) && $data['matchType'] !== null) {
                $instance->matchType = $data['matchType'];
            }
            if (isset($data['relation']) && $data['relation'] !== null) {
                $instance->relation = $data['relation'];
            }
            if (isset($data['values']) && $data['values'] !== null) {
                $instance->values = array_map(function($item) { return ShopifyMetaobject::fromArray($item); }, $data['values']);
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
            if ($this->definition !== null) {
                $data['definition'] = $this->definition->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->matchType !== null) {
                $data['matchType'] = $this->matchType;
            }
            if ($this->relation !== null) {
                $data['relation'] = $this->relation;
            }
            if ($this->values !== null) {
                $data['values'] = array_map(function($item) { return $item->asArray(); }, $this->values);
            }
            return $data;
        }
}
