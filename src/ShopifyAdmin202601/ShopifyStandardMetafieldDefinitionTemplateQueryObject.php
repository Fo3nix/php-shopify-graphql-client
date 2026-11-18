<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Standard metafield definition templates provide preset configurations to create metafield definitions.
 * Each template has a specific namespace and key that we've reserved to have specific meanings for common use cases.
 *
 * Refer to the [list of standard metafield definitions](https://shopify.dev/apps/metafields/definitions/standard-definitions).
 */
class ShopifyStandardMetafieldDefinitionTemplateQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetafieldDefinitionTemplate";

    /**
     * The description of the standard metafield definition.
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
     * The key owned by the definition after the definition has been activated.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * The human-readable name for the standard metafield definition.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The namespace owned by the definition after the definition has been activated.
     */
    public function selectNamespace(): static
    {
        $this->selectField("namespace");

        return $this;
    }

    /**
     * The list of resource types that the standard metafield definition can be applied to.
     */
    public function selectOwnerTypes(): static
    {
        $this->selectField("ownerTypes");

        return $this;
    }

    /**
     * The associated [metafield definition type](https://shopify.dev/apps/metafields/definitions/types) that the metafield stores.
     */
    public function selectType(?ShopifyStandardMetafieldDefinitionTemplateTypeArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionTypeQueryObject
    {
        $object = new ShopifyMetafieldDefinitionTypeQueryObject("type");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The configured validations for the standard metafield definition.
     */
    public function selectValidations(?ShopifyStandardMetafieldDefinitionTemplateValidationsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionValidationQueryObject
    {
        $object = new ShopifyMetafieldDefinitionValidationQueryObject("validations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether metafields for the definition are by default visible using the Storefront API.
     */
    public function selectVisibleToStorefrontApi(): static
    {
        $this->selectField("visibleToStorefrontApi");

        return $this;
    }
}
