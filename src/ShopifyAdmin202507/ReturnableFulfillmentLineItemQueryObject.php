<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReturnableFulfillmentLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillmentLineItem";

    public function selectFulfillmentLineItem(ReturnableFulfillmentLineItemFulfillmentLineItemArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentLineItemQueryObject("fulfillmentLineItem");
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
