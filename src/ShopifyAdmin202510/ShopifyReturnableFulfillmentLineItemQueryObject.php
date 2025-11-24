<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnableFulfillmentLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillmentLineItem";

    public function selectFulfillmentLineItem(ShopifyReturnableFulfillmentLineItemFulfillmentLineItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentLineItemQueryObject("fulfillmentLineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }
}
