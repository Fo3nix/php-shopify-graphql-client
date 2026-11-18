<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * An inclusion condition introduced in a newer API version that is not modeled by this version of the API. Clients should treat the relation and values as opaque strings.
 */
class ShopifyCollectionSourceInclusionConditionUnknown implements ShopifyCollectionSourceInclusionCondition
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
     * Whether products must match any or all values. Null when the condition has no concept of a match type.
     *
     * @return string A ShopifyCollectionConditionMatchTypeEnumObject value
     */
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    
    /**
     * The relation, as a raw string. Nullable and not coerced into an enum because the set of possible relations is open-ended for unknown condition types, and some future conditions may not have a relation at all.
     *
     * @return string
     */
    public function getRelation(): ?string
    {
        return $this->relation;
    }

    
    /**
     * The condition values, as raw strings. Nullable because some future condition types may have no values at all.
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
