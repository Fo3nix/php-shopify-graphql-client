<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines the structure, validation rules, and permissions for [`Metafield`](https://shopify.dev/docs/api/admin-graphql/current/objects/Metafield) objects attached to a specific owner type. Each definition establishes a schema that metafields must follow, including the data type and validation constraints.
 *
 * The definition controls access permissions across different APIs, determines whether the metafield can be used for filtering or as a collection condition, and can be constrained to specific resource subtypes.
 */
class ShopifyMetafieldDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinition";

    /**
     * The access settings associated with the metafield definition.
     */
    public function selectAccess(?ShopifyMetafieldDefinitionAccessArgumentsObject $argsObject = null): ShopifyMetafieldAccessQueryObject
    {
        $object = new ShopifyMetafieldAccessQueryObject("access");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The capabilities of the metafield definition.
     */
    public function selectCapabilities(?ShopifyMetafieldDefinitionCapabilitiesArgumentsObject $argsObject = null): ShopifyMetafieldCapabilitiesQueryObject
    {
        $object = new ShopifyMetafieldCapabilitiesQueryObject("capabilities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The [constraints](https://shopify.dev/apps/build/custom-data/metafields/conditional-metafield-definitions)
     * that determine what subtypes of resources a metafield definition applies to.
     */
    public function selectConstraints(?ShopifyMetafieldDefinitionConstraintsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConstraintsQueryObject
    {
        $object = new ShopifyMetafieldDefinitionConstraintsQueryObject("constraints");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The description of the metafield definition.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * A globally-unique ID.
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
     * The metafields that belong to the metafield definition.
     */
    public function selectMetafields(?ShopifyMetafieldDefinitionMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The count of the metafields that belong to the metafield definition.
     */
    public function selectMetafieldsCount(): static
    {
        $this->selectField("metafieldsCount");

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
     * The position of the metafield definition in the pinned list.
     */
    public function selectPinnedPosition(): static
    {
        $this->selectField("pinnedPosition");

        return $this;
    }

    /**
     * The standard metafield definition template associated with the metafield definition.
     */
    public function selectStandardTemplate(?ShopifyMetafieldDefinitionStandardTemplateArgumentsObject $argsObject = null): ShopifyStandardMetafieldDefinitionTemplateQueryObject
    {
        $object = new ShopifyStandardMetafieldDefinitionTemplateQueryObject("standardTemplate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The type of data that each of the metafields that belong to the metafield definition will store.
     * Refer to the list of [supported types](https://shopify.dev/apps/metafields/types).
     */
    public function selectType(?ShopifyMetafieldDefinitionTypeArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionTypeQueryObject
    {
        $object = new ShopifyMetafieldDefinitionTypeQueryObject("type");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the metafield definition can be used as a collection condition.
     */
    public function selectUseAsCollectionCondition(): static
    {
        $this->selectField("useAsCollectionCondition");

        return $this;
    }

    /**
     * The validation status for the metafields that belong to the metafield definition.
     */
    public function selectValidationStatus(): static
    {
        $this->selectField("validationStatus");

        return $this;
    }

    /**
     * A list of [validation options](https://shopify.dev/apps/metafields/definitions/validation) for
     * the metafields that belong to the metafield definition. For example, for a metafield definition with the
     * type `date`, you can set a minimum date validation so that each of the metafields that belong to it can only
     * store dates after the specified minimum.
     */
    public function selectValidations(?ShopifyMetafieldDefinitionValidationsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionValidationQueryObject
    {
        $object = new ShopifyMetafieldDefinitionValidationQueryObject("validations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
