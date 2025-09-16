<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseDeliveryLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryLineItem";

    public function selectDispositions(ReverseDeliveryLineItemDispositionsArgumentsObject $argsObject = null)
    {
        $object = new ReverseFulfillmentOrderDispositionQueryObject("dispositions");
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

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectReverseFulfillmentOrderLineItem(ReverseDeliveryLineItemReverseFulfillmentOrderLineItemArgumentsObject $argsObject = null)
    {
        $object = new ReverseFulfillmentOrderLineItemQueryObject("reverseFulfillmentOrderLineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
