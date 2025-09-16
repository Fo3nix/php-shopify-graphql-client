<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StandardMetaobjectDefinitionTemplateQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetaobjectDefinitionTemplate";

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

    public function selectEnabledCapabilities(StandardMetaobjectDefinitionTemplateEnabledCapabilitiesArgumentsObject $argsObject = null)
    {
        $object = new StandardMetaobjectCapabilityTemplateQueryObject("enabledCapabilities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFieldDefinitions(StandardMetaobjectDefinitionTemplateFieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new StandardMetaobjectDefinitionFieldTemplateQueryObject("fieldDefinitions");
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
