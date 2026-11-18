<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Properties used by customers to select a product variant.
 * Products can have multiple options, like different sizes or colors.
 */
class ShopifySelectedOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SelectedOption";

    /**
     * The product option’s name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The product option’s value object.
     */
    public function selectOptionValue(?ShopifySelectedOptionOptionValueArgumentsObject $argsObject = null): ShopifyProductOptionValueQueryObject
    {
        $object = new ShopifyProductOptionValueQueryObject("optionValue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product option’s value.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
