<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountOnQuantityQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountOnQuantity";

    public function selectEffect(DiscountOnQuantityEffectArgumentsObject $argsObject = null)
    {
        $object = new DiscountEffectUnionObject("effect");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantity(DiscountOnQuantityQuantityArgumentsObject $argsObject = null)
    {
        $object = new DiscountQuantityQueryObject("quantity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
