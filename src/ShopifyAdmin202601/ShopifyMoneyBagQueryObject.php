<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMoneyBagQueryObject extends QueryObject
{
    const OBJECT_NAME = "MoneyBag";

    public function selectPresentmentMoney(ShopifyMoneyBagPresentmentMoneyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("presentmentMoney");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopMoney(ShopifyMoneyBagShopMoneyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("shopMoney");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
