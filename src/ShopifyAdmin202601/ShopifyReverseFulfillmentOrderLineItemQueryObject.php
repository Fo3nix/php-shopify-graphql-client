<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReverseFulfillmentOrderLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderLineItem";

    public function selectDispositions(ShopifyReverseFulfillmentOrderLineItemDispositionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseFulfillmentOrderDispositionQueryObject("dispositions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentLineItem(ShopifyReverseFulfillmentOrderLineItemFulfillmentLineItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentLineItemQueryObject("fulfillmentLineItem");
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

    public function selectTotalQuantity()
    {
        $this->selectField("totalQuantity");

        return $this;
    }
}
