<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountMinimumSubtotalQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountMinimumSubtotal";

    public function selectGreaterThanOrEqualToSubtotal(DiscountMinimumSubtotalGreaterThanOrEqualToSubtotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("greaterThanOrEqualToSubtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
