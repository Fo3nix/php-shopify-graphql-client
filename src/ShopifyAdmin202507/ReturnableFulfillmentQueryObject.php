<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReturnableFulfillmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillment";

    public function selectFulfillment(ReturnableFulfillmentFulfillmentArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentQueryObject("fulfillment");
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

    public function selectReturnableFulfillmentLineItems(ReturnableFulfillmentReturnableFulfillmentLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ReturnableFulfillmentLineItemConnectionQueryObject("returnableFulfillmentLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
