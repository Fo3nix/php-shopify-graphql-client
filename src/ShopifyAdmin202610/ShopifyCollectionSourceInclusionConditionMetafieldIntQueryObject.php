<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition based on integer metafield values for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldIntQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceInclusionConditionMetafieldInt";

    /**
     * The metafield definition to use for the condition.
     */
    public function selectDefinition(?ShopifyCollectionSourceInclusionConditionMetafieldIntDefinitionArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionQueryObject
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
