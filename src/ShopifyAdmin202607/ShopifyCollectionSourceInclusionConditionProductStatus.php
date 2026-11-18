<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * A condition based on product status for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionProductStatus implements ShopifyCollectionSourceInclusionCondition
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
     * Specifies whether products must match any or all values.
     *
     * @return string A ShopifyCollectionConditionMatchTypeEnumObject value
     */
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    
    /**
     * The relationship between the product status and the condition values.
     *
     * @return string A ShopifyCollectionSourceInclusionConditionProductStatusRelationEnumObject value
     */
    public function getRelation(): ?string
    {
        return $this->relation;
    }

    
    /**
     * The product status values to match against.
     *
     * @return string[] ShopifyProductStatusEnumObject values
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
