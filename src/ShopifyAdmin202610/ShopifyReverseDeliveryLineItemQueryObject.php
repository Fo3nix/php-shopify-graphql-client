<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReverseDeliveryLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryLineItem";

    public function selectDispositions(ShopifyReverseDeliveryLineItemDispositionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseFulfillmentOrderDispositionQueryObject("dispositions");
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

    public function selectReverseFulfillmentOrderLineItem(ShopifyReverseDeliveryLineItemReverseFulfillmentOrderLineItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseFulfillmentOrderLineItemQueryObject("reverseFulfillmentOrderLineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
