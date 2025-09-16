<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountCustomerBuysQueryObject extends QueryObject
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

    public function selectItems(DiscountCustomerBuysItemsArgumentsObject $argsObject = null)
    {
        $object = new DiscountItemsUnionObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValue(DiscountCustomerBuysValueArgumentsObject $argsObject = null)
    {
        $object = new DiscountCustomerBuysValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
