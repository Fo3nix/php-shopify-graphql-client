<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A discount application removed during an order edit.
 */
class ShopifyOrderStagedChangeRemoveDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderStagedChangeRemoveDiscount";

    /**
     * The removed discount application.
     */
    public function selectDiscountApplication(?ShopifyOrderStagedChangeRemoveDiscountDiscountApplicationArgumentsObject $argsObject = null): ShopifyDiscountApplicationInterfaceObject
    {
        $object = new ShopifyDiscountApplicationInterfaceObject("discountApplication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
