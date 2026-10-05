<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountCustomerGetsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCustomerGets";

    public function selectAppliesOnOneTimePurchase()
    {
        $this->selectField("appliesOnOneTimePurchase");

        return $this;
    }

    public function selectAppliesOnSubscription()
    {
        $this->selectField("appliesOnSubscription");

        return $this;
    }

    public function selectItems(ShopifyDiscountCustomerGetsItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountItemsUnionObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValue(ShopifyDiscountCustomerGetsValueArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCustomerGetsValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
