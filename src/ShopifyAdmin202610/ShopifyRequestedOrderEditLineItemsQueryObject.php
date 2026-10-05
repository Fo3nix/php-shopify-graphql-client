<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRequestedOrderEditLineItemsQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEditLineItems";

    public function selectRemovals(ShopifyRequestedOrderEditLineItemsRemovalsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRequestedOrderEditLineItemConnectionQueryObject("removals");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
