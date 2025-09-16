<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountCustomerGetsQueryObject extends QueryObject
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

    public function selectItems(DiscountCustomerGetsItemsArgumentsObject $argsObject = null)
    {
        $object = new DiscountItemsUnionObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValue(DiscountCustomerGetsValueArgumentsObject $argsObject = null)
    {
        $object = new DiscountCustomerGetsValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
