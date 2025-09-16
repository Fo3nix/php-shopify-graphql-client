<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SellingPlanCheckoutChargeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanCheckoutCharge";

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectValue(SellingPlanCheckoutChargeValueArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanCheckoutChargeValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
