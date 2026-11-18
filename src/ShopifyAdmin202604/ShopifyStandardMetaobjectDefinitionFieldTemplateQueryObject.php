<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A preset field definition on a standard metaobject definition template.
 */
class ShopifyStandardMetaobjectDefinitionFieldTemplateQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetaobjectDefinitionFieldTemplate";

    /**
     * The administrative description.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The key owned by the definition after the definition has been enabled.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * The human-readable name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The required status of the field within the object composition.
     */
    public function selectRequired(): static
    {
        $this->selectField("required");

        return $this;
    }

    /**
     * The associated [metafield definition type](https://shopify.dev/apps/metafields/definitions/types) that the metafield stores.
     */
    public function selectType(?ShopifyStandardMetaobjectDefinitionFieldTemplateTypeArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionTypeQueryObject
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
    public function selectValidations(?ShopifyStandardMetaobjectDefinitionFieldTemplateValidationsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionValidationQueryObject
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
     *
     * @deprecated Access control at the metaobject field definition level is deprecated and will be removed in 2027-01. Use the access field on the definition instead.
     */
    public function selectVisibleToStorefrontApi(): static
    {
        $this->selectField("visibleToStorefrontApi");

        return $this;
    }
}
