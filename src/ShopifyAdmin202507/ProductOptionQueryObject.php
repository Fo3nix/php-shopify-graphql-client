<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductOption";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLinkedMetafield(ProductOptionLinkedMetafieldArgumentsObject $argsObject = null)
    {
        $object = new LinkedMetafieldQueryObject("linkedMetafield");
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

    public function selectOptionValues(ProductOptionOptionValuesArgumentsObject $argsObject = null)
    {
        $object = new ProductOptionValueQueryObject("optionValues");
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

    public function selectTranslations(ProductOptionTranslationsArgumentsObject $argsObject = null)
    {
        $object = new TranslationQueryObject("translations");
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
