<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnableFulfillmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillment";

    public function selectFulfillment(ShopifyReturnableFulfillmentFulfillmentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentQueryObject("fulfillment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectReturnableFulfillmentLineItems(ShopifyReturnableFulfillmentReturnableFulfillmentLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnableFulfillmentLineItemConnectionQueryObject("returnableFulfillmentLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
