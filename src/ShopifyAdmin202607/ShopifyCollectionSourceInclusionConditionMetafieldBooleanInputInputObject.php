<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a condition based on boolean metafield values.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldBooleanInputInputObject extends InputObject
{
    const REQUIRED = ["definitionId", "relation", "value"];

    protected $definitionId;
    protected $relation;
    protected $value;

    /**
     * The ID of the metafield definition.
     */
    public function setDefinitionId($definitionId): static
    {
        $this->definitionId = $definitionId;

        return $this;
    }

    /**
     * The relationship between the metafield value and the condition value.
     */
    public function setRelation($shopifyCollectionSourceInclusionConditionMetafieldBooleanRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceInclusionConditionMetafieldBooleanRelation);

        return $this;
    }

    /**
     * The boolean value to match against.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }
}
