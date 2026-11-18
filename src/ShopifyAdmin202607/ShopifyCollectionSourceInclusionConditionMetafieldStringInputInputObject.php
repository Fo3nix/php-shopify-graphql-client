<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a condition based on string metafield values.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldStringInputInputObject extends InputObject
{
    const REQUIRED = ["definitionId", "relation", "values", "matchType"];

    protected $definitionId;
    protected $relation;
    protected $values;
    protected $matchType;

    /**
     * The ID of the metafield definition.
     */
    public function setDefinitionId($definitionId): static
    {
        $this->definitionId = $definitionId;

        return $this;
    }

    /**
     * The relationship between the metafield value and the condition values.
     */
    public function setRelation($shopifyCollectionSourceInclusionConditionMetafieldStringRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceInclusionConditionMetafieldStringRelation);

        return $this;
    }

    /**
     * The string values to match against.
     */
    public function setValues(array $values): static
    {
        $this->values = $values;

        return $this;
    }

    /**
     * Whether to match any or all of the values.
     */
    public function setMatchType($shopifyCollectionConditionMatchType): static
    {
        $this->matchType = new RawObject($shopifyCollectionConditionMatchType);

        return $this;
    }
}
