<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition based on boolean metafield values for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldBooleanQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceInclusionConditionMetafieldBoolean";

    /**
     * The metafield definition to use for the condition.
     */
    public function selectDefinition(?ShopifyCollectionSourceInclusionConditionMetafieldBooleanDefinitionArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionQueryObject
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
     * The relationship between the metafield value and the condition.
     */
    public function selectRelation(): static
    {
        $this->selectField("relation");

        return $this;
    }

    /**
     * The boolean value to match against.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
