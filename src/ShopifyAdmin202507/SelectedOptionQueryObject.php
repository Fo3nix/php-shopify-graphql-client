<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SelectedOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SelectedOption";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectOptionValue(SelectedOptionOptionValueArgumentsObject $argsObject = null)
    {
        $object = new ProductOptionValueQueryObject("optionValue");
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
