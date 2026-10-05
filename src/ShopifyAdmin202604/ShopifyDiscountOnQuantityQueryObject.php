<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountOnQuantityQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountOnQuantity";

    public function selectEffect(ShopifyDiscountOnQuantityEffectArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountEffectUnionObject("effect");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantity(ShopifyDiscountOnQuantityQuantityArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountQuantityQueryObject("quantity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
