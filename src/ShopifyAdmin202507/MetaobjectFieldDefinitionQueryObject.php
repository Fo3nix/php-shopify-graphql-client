<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectFieldDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectFieldDefinition";

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

    public function selectType(MetaobjectFieldDefinitionTypeArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionTypeQueryObject("type");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValidations(MetaobjectFieldDefinitionValidationsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionValidationQueryObject("validations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
