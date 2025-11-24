<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductOptionValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductOptionValue";

    public function selectHasVariants()
    {
        $this->selectField("hasVariants");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLinkedMetafieldValue()
    {
        $this->selectField("linkedMetafieldValue");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectSwatch(ShopifyProductOptionValueSwatchArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductOptionValueSwatchQueryObject("swatch");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTranslations(ShopifyProductOptionValueTranslationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
