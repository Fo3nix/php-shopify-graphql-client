<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition based on list of string metafield values for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldStringListQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceInclusionConditionMetafieldStringList";

    /**
     * The metafield definition to use for the condition.
     */
    public function selectDefinition(?ShopifyCollectionSourceInclusionConditionMetafieldStringListDefinitionArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionQueryObject
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
     * Determines how many values a metafield must match against in order to satisfy this condition. Will be either at least one given value, or all of the given values.
     */
    public function selectMatchType(): static
    {
        $this->selectField("matchType");

        return $this;
    }

    /**
     * The relationship between the metafield value and the condition values.
     */
    public function selectRelation(): static
    {
        $this->selectField("relation");

        return $this;
    }

    /**
     * The string values to match against.
     */
    public function selectValues(): static
    {
        $this->selectField("values");

        return $this;
    }
}
