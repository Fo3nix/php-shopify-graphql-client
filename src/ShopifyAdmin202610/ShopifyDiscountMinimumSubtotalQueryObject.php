<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountMinimumSubtotalQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountMinimumSubtotal";

    public function selectGreaterThanOrEqualToSubtotal(ShopifyDiscountMinimumSubtotalGreaterThanOrEqualToSubtotalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("greaterThanOrEqualToSubtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
