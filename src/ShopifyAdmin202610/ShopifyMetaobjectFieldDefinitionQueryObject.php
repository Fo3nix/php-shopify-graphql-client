<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectFieldDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectFieldDefinition";

    public function selectCapabilities(ShopifyMetaobjectFieldDefinitionCapabilitiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectFieldDefinitionCapabilitiesQueryObject("capabilities");
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

    public function selectKey()
    {
        $this->selectField("key");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectRequired()
    {
        $this->selectField("required");

        return $this;
    }

    public function selectType(ShopifyMetaobjectFieldDefinitionTypeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionTypeQueryObject("type");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValidations(ShopifyMetaobjectFieldDefinitionValidationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionValidationQueryObject("validations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
