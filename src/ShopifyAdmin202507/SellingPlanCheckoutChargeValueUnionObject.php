<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class SellingPlanCheckoutChargeValueUnionObject extends UnionObject
{
    public function onMoneyV2()
    {
        $object = new MoneyV2QueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSellingPlanCheckoutChargePercentageValue()
    {
        $object = new SellingPlanCheckoutChargePercentageValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
