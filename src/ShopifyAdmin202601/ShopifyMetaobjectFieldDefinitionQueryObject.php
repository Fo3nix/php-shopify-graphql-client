<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines a field for a MetaobjectDefinition with properties
 * such as the field's data type and validations.
 */
class ShopifyMetaobjectFieldDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectFieldDefinition";

    /**
     * Capabilities available for this metaobject field definition.
     */
    public function selectCapabilities(?ShopifyMetaobjectFieldDefinitionCapabilitiesArgumentsObject $argsObject = null): ShopifyMetaobjectFieldDefinitionCapabilitiesQueryObject
    {
        $object = new ShopifyMetaobjectFieldDefinitionCapabilitiesQueryObject("capabilities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The administrative description.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * A key name used to identify the field within the metaobject composition.
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
     * Required status of the field within the metaobject composition.
     */
    public function selectRequired(): static
    {
        $this->selectField("required");

        return $this;
    }

    /**
     * The type of data that the field stores.
     */
    public function selectType(?ShopifyMetaobjectFieldDefinitionTypeArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionTypeQueryObject
    {
        $object = new ShopifyMetafieldDefinitionTypeQueryObject("type");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [validation options](https://shopify.dev/apps/metafields/definitions/validation) for
     * the field. For example, a field with the type `date` can set a minimum date requirement.
     */
    public function selectValidations(?ShopifyMetaobjectFieldDefinitionValidationsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionValidationQueryObject
    {
        $object = new ShopifyMetafieldDefinitionValidationQueryObject("validations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
