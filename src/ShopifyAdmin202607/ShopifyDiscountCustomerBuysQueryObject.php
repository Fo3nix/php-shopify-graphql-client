<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountCustomerBuysQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCustomerBuys";

    public function selectIsOneTimePurchase()
    {
        $this->selectField("isOneTimePurchase");

        return $this;
    }

    public function selectIsSubscription()
    {
        $this->selectField("isSubscription");

        return $this;
    }

    public function selectItems(ShopifyDiscountCustomerBuysItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountItemsUnionObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValue(ShopifyDiscountCustomerBuysValueArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCustomerBuysValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
