<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MoneyBagQueryObject extends QueryObject
{
    const OBJECT_NAME = "MoneyBag";

    public function selectPresentmentMoney(MoneyBagPresentmentMoneyArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("presentmentMoney");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopMoney(MoneyBagShopMoneyArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("shopMoney");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
