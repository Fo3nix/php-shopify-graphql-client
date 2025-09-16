<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseFulfillmentOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrder";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLineItems(ReverseFulfillmentOrderLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ReverseFulfillmentOrderLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrder(ReverseFulfillmentOrderOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReverseDeliveries(ReverseFulfillmentOrderReverseDeliveriesArgumentsObject $argsObject = null)
    {
        $object = new ReverseDeliveryConnectionQueryObject("reverseDeliveries");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectThirdPartyConfirmation(ReverseFulfillmentOrderThirdPartyConfirmationArgumentsObject $argsObject = null)
    {
        $object = new ReverseFulfillmentOrderThirdPartyConfirmationQueryObject("thirdPartyConfirmation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
