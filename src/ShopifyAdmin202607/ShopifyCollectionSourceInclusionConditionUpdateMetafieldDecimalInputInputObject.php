<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating a condition based on decimal metafield values.
 */
class ShopifyCollectionSourceInclusionConditionUpdateMetafieldDecimalInputInputObject extends InputObject
{
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
    public function setRelation($shopifyCollectionSourceInclusionConditionMetafieldDecimalRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceInclusionConditionMetafieldDecimalRelation);

        return $this;
    }

    /**
     * The decimal value to match against.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }
}
