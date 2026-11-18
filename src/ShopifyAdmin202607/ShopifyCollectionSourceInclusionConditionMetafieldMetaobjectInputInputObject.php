<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a condition based on single metaobject reference metafield values.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectInputInputObject extends InputObject
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
    public function setRelation($shopifyCollectionSourceInclusionConditionMetafieldMetaobjectRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceInclusionConditionMetafieldMetaobjectRelation);

        return $this;
    }

    /**
     * The metaobject ID to match against.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }
}
