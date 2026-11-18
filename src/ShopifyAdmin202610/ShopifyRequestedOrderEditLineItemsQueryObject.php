<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The line item changes on a requested order edit, grouped by the type of change.
 */
class ShopifyRequestedOrderEditLineItemsQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEditLineItems";

    /**
     * The line items requested for removal from the order.
     */
    public function selectRemovals(?ShopifyRequestedOrderEditLineItemsRemovalsArgumentsObject $argsObject = null): ShopifyRequestedOrderEditLineItemConnectionQueryObject
    {
        $object = new ShopifyRequestedOrderEditLineItemConnectionQueryObject("removals");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
