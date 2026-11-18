<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A non-metaobject metafield definition usable as a collection condition.
 */
class ShopifyCollectionConditionBasicMetafieldDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionConditionBasicMetafieldDefinition";

    /**
     * The description of the metafield definition.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The ID of the underlying metafield definition.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The unique identifier for the metafield definition within its namespace.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * The human-readable name of the metafield definition.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The container for a group of metafields that the metafield definition is associated with.
     */
    public function selectNamespace(): static
    {
        $this->selectField("namespace");

        return $this;
    }

    /**
     * The resource type that the metafield definition is attached to.
     */
    public function selectOwnerType(): static
    {
        $this->selectField("ownerType");

        return $this;
    }

    /**
     * The data type of the metafield definition.
     */
    public function selectType(?ShopifyCollectionConditionBasicMetafieldDefinitionTypeArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionTypeQueryObject
    {
        $object = new ShopifyMetafieldDefinitionTypeQueryObject("type");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of validation options for the metafields that belong to the metafield definition.
     */
    public function selectValidations(?ShopifyCollectionConditionBasicMetafieldDefinitionValidationsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionValidationQueryObject
    {
        $object = new ShopifyMetafieldDefinitionValidationQueryObject("validations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
