<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySellingPlanCheckoutChargeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanCheckoutCharge";

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectValue(ShopifySellingPlanCheckoutChargeValueArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanCheckoutChargeValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
