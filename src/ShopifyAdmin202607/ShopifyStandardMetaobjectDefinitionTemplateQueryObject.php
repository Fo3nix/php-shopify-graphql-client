<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStandardMetaobjectDefinitionTemplateQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetaobjectDefinitionTemplate";

    public function selectAccess(ShopifyStandardMetaobjectDefinitionTemplateAccessArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectAccessQueryObject("access");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectDisplayNameKey()
    {
        $this->selectField("displayNameKey");

        return $this;
    }

    public function selectEnabledCapabilities(ShopifyStandardMetaobjectDefinitionTemplateEnabledCapabilitiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStandardMetaobjectCapabilityTemplateQueryObject("enabledCapabilities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFieldDefinitions(ShopifyStandardMetaobjectDefinitionTemplateFieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStandardMetaobjectDefinitionFieldTemplateQueryObject("fieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }
}
