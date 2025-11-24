<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySelectedOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SelectedOption";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectOptionValue(ShopifySelectedOptionOptionValueArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductOptionValueQueryObject("optionValue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
