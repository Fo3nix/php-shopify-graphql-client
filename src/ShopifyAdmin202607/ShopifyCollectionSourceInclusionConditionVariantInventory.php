<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * A condition based on variant inventory quantities for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionVariantInventory implements ShopifyCollectionSourceInclusionCondition
{
    protected $id;
    protected $relation;
    protected $value;

    
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
     * The relationship between the variant inventory and the condition values.
     *
     * @return string A ShopifyCollectionSourceInclusionConditionVariantInventoryRelationEnumObject value
     */
    public function getRelation(): ?string
    {
        return $this->relation;
    }

    
    /**
     * The variant inventory to match against.
     *
     * @return int
     */
    public function getValue(): ?int
    {
        return $this->value;
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
            if (isset($data['relation']) && $data['relation'] !== null) {
                $instance->relation = $data['relation'];
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = $data['value'];
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
            if ($this->relation !== null) {
                $data['relation'] = $this->relation;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
