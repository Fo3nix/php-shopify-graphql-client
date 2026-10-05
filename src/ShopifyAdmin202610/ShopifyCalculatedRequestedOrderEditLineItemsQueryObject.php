<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCalculatedRequestedOrderEditLineItemsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedRequestedOrderEditLineItems";

    public function selectRemovals(ShopifyCalculatedRequestedOrderEditLineItemsRemovalsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCalculatedRequestedOrderEditLineItemConnectionQueryObject("removals");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
