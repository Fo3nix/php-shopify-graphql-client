<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductOption";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLinkedMetafield(ShopifyProductOptionLinkedMetafieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLinkedMetafieldQueryObject("linkedMetafield");
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

    public function selectOptionValues(ShopifyProductOptionOptionValuesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductOptionValueQueryObject("optionValues");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPosition()
    {
        $this->selectField("position");

        return $this;
    }

    public function selectTranslations(ShopifyProductOptionTranslationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValues()
    {
        $this->selectField("values");

        return $this;
    }
}
