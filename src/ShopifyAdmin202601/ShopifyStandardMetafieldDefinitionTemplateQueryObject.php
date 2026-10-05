<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStandardMetafieldDefinitionTemplateQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetafieldDefinitionTemplate";

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

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

    public function selectNamespace()
    {
        $this->selectField("namespace");

        return $this;
    }

    public function selectOwnerTypes()
    {
        $this->selectField("ownerTypes");

        return $this;
    }

    public function selectType(ShopifyStandardMetafieldDefinitionTemplateTypeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionTypeQueryObject("type");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValidations(ShopifyStandardMetafieldDefinitionTemplateValidationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionValidationQueryObject("validations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVisibleToStorefrontApi()
    {
        $this->selectField("visibleToStorefrontApi");

        return $this;
    }
}
