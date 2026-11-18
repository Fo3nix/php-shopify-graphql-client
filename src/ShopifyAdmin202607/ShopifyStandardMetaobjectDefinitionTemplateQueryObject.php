<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Standard metaobject definition templates provide preset configurations to create metaobject definitions.
 */
class ShopifyStandardMetaobjectDefinitionTemplateQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetaobjectDefinitionTemplate";

    /**
     * Access configuration for the standard metaobject definition template.
     */
    public function selectAccess(?ShopifyStandardMetaobjectDefinitionTemplateAccessArgumentsObject $argsObject = null): ShopifyMetaobjectAccessQueryObject
    {
        $object = new ShopifyMetaobjectAccessQueryObject("access");
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
     * The key of a field to reference as the display name for each object.
     */
    public function selectDisplayNameKey(): static
    {
        $this->selectField("displayNameKey");

        return $this;
    }

    /**
     * The capabilities of the metaobject definition.
     */
    public function selectEnabledCapabilities(?ShopifyStandardMetaobjectDefinitionTemplateEnabledCapabilitiesArgumentsObject $argsObject = null): ShopifyStandardMetaobjectCapabilityTemplateQueryObject
    {
        $object = new ShopifyStandardMetaobjectCapabilityTemplateQueryObject("enabledCapabilities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Templates for the associated field definitions.
     */
    public function selectFieldDefinitions(?ShopifyStandardMetaobjectDefinitionTemplateFieldDefinitionsArgumentsObject $argsObject = null): ShopifyStandardMetaobjectDefinitionFieldTemplateQueryObject
    {
        $object = new ShopifyStandardMetaobjectDefinitionFieldTemplateQueryObject("fieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * The namespace owned by the definition after the definition has been enabled.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }
}
