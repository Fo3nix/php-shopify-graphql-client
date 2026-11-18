<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinition;

/**
 * A condition based on boolean metafield values for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldBoolean implements ShopifyCollectionSourceInclusionCondition, ShopifyCollectionSourceInclusionConditionMetafield
{
    protected $definition;
    protected $id;
    protected $relation;
    protected $value;

    
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
     * The relationship between the metafield value and the condition.
     *
     * @return string A ShopifyCollectionSourceInclusionConditionMetafieldBooleanRelationEnumObject value
     */
    public function getRelation(): ?string
    {
        return $this->relation;
    }

    
    /**
     * The boolean value to match against.
     *
     * @return bool
     */
    public function getValue(): ?bool
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
            if (isset($data['definition']) && $data['definition'] !== null) {
                $instance->definition = ShopifyMetafieldDefinition::fromArray($data['definition']);
            }
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
            if ($this->definition !== null) {
                $data['definition'] = $this->definition->asArray();
            }
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
