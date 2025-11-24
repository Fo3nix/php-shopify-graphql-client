<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStandardMetaobjectDefinitionFieldTemplateQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetaobjectDefinitionFieldTemplate";

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

    public function selectType(ShopifyStandardMetaobjectDefinitionFieldTemplateTypeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionTypeQueryObject("type");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValidations(ShopifyStandardMetaobjectDefinitionFieldTemplateValidationsArgumentsObject $argsObject = null)
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
