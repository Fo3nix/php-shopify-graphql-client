<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition based on list of metaobject reference metafield values for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectListQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceInclusionConditionMetafieldMetaobjectList";

    /**
     * The metafield definition to use for the condition.
     */
    public function selectDefinition(?ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectListDefinitionArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionQueryObject
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
     * The metaobjects to match against.
     */
    public function selectValues(?ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectListValuesArgumentsObject $argsObject = null): ShopifyMetaobjectQueryObject
    {
        $object = new ShopifyMetaobjectQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
