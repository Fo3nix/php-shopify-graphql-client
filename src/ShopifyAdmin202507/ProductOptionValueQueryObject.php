<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductOptionValueQueryObject extends QueryObject
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

    public function selectSwatch(ProductOptionValueSwatchArgumentsObject $argsObject = null)
    {
        $object = new ProductOptionValueSwatchQueryObject("swatch");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTranslations(ProductOptionValueTranslationsArgumentsObject $argsObject = null)
    {
        $object = new TranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
