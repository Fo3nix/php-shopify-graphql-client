<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseFulfillmentOrderLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderLineItem";

    public function selectDispositions(ReverseFulfillmentOrderLineItemDispositionsArgumentsObject $argsObject = null)
    {
        $object = new ReverseFulfillmentOrderDispositionQueryObject("dispositions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentLineItem(ReverseFulfillmentOrderLineItemFulfillmentLineItemArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentLineItemQueryObject("fulfillmentLineItem");
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
