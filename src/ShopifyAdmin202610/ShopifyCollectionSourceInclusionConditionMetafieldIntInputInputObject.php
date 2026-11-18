<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a condition based on integer metafield values.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldIntInputInputObject extends InputObject
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
    public function setRelation($shopifyCollectionSourceInclusionConditionMetafieldIntRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceInclusionConditionMetafieldIntRelation);

        return $this;
    }

    /**
     * The integer value to match against, as a string.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }
}
