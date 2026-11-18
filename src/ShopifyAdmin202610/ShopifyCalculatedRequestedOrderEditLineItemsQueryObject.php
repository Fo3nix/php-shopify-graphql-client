<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The line item changes on a calculated requested order edit, grouped by the type of change.
 */
class ShopifyCalculatedRequestedOrderEditLineItemsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedRequestedOrderEditLineItems";

    /**
     * The line items being removed in the calculated edit.
     */
    public function selectRemovals(?ShopifyCalculatedRequestedOrderEditLineItemsRemovalsArgumentsObject $argsObject = null): ShopifyCalculatedRequestedOrderEditLineItemConnectionQueryObject
    {
        $object = new ShopifyCalculatedRequestedOrderEditLineItemConnectionQueryObject("removals");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
