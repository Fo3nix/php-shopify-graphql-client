<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition based on integer metafield values for including products in a collection. This object is deprecated as of API version 2026-10 in favor of `CollectionSourceInclusionConditionMetafieldInt`, which supports the full integer metafield value range. On those versions this legacy type is only returned to queries that reference it without also referencing `CollectionSourceInclusionConditionMetafieldInt`. As of API version 2027-01, this legacy type is removed entirely.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldIntegerQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceInclusionConditionMetafieldInteger";

    /**
     * The metafield definition to use for the condition.
     */
    public function selectDefinition(?ShopifyCollectionSourceInclusionConditionMetafieldIntegerDefinitionArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionQueryObject("definition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unique identifier for this condition.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The relationship between the metafield value and the condition value.
     */
    public function selectRelation(): static
    {
        $this->selectField("relation");

        return $this;
    }

    /**
     * The integer value to match against.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
