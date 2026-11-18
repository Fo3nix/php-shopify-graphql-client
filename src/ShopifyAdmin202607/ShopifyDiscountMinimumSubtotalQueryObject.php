<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The minimum subtotal required for the discount to apply.
 */
class ShopifyDiscountMinimumSubtotalQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountMinimumSubtotal";

    /**
     * The minimum subtotal that's required for the discount to be applied.
     */
    public function selectGreaterThanOrEqualToSubtotal(?ShopifyDiscountMinimumSubtotalGreaterThanOrEqualToSubtotalArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("greaterThanOrEqualToSubtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
