<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * A condition based on product tags for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionProductTag implements ShopifyCollectionSourceInclusionCondition
{
    protected $id;
    protected $matchType;
    protected $relation;
    protected $values;

    
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
     * The relationship between the product tag and the condition values.
     *
     * @return string A ShopifyCollectionSourceInclusionConditionProductTagRelationEnumObject value
     */
    public function getRelation(): ?string
    {
        return $this->relation;
    }

    
    /**
     * The tag values to match against.
     *
     * @return string[]
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
                $instance->values = $data['values'];
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
                $data['values'] = $this->values;
            }
            return $data;
        }
}
