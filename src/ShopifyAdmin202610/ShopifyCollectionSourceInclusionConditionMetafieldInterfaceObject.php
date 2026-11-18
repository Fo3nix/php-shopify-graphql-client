<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A condition that determines which products should be included in a collection.
 *
 * This is an interface implemented by a concrete type per condition kind (for example,
 * `CollectionSourceInclusionConditionProductTag` or `CollectionSourceInclusionConditionVariantTitle`).
 * Fields such as `relation` are defined on each concrete type and return a type-specific enum (for example,
 * `CollectionSourceInclusionConditionProductTagRelation` versus
 * `CollectionSourceInclusionConditionVariantTitleRelation`). Conditions are mutually exclusive concrete
 * types, but may contain overlapping field names such as `relation`. If your GraphQL tooling flags these
 * as ambiguous, give each field a distinct alias (for example, `tagRelation: relation` and
 * `variantTitleRelation: relation`) or use inline fragments.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "CollectionSourceInclusionConditionMetafield";

    /**
     * The metafield definition to use for the condition.
     */
    public function selectDefinition(?ShopifyCollectionSourceInclusionConditionMetafieldDefinitionArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionQueryObject
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

    public function onCollectionSourceInclusionConditionMetafieldBoolean(): ShopifyCollectionSourceInclusionConditionMetafieldBooleanQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionMetafieldBooleanQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionMetafieldDecimal(): ShopifyCollectionSourceInclusionConditionMetafieldDecimalQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionMetafieldDecimalQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionMetafieldInt(): ShopifyCollectionSourceInclusionConditionMetafieldIntQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionMetafieldIntQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionMetafieldInteger(): ShopifyCollectionSourceInclusionConditionMetafieldIntegerQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionMetafieldIntegerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionMetafieldMetaobject(): ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionMetafieldMetaobjectList(): ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectListQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectListQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionMetafieldString(): ShopifyCollectionSourceInclusionConditionMetafieldStringQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionMetafieldStringQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionMetafieldStringList(): ShopifyCollectionSourceInclusionConditionMetafieldStringListQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionMetafieldStringListQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
