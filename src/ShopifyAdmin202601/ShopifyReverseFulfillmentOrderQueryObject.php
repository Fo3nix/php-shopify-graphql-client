<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReverseFulfillmentOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrder";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLineItems(ShopifyReverseFulfillmentOrderLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseFulfillmentOrderLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrder(ShopifyReverseFulfillmentOrderOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReverseDeliveries(ShopifyReverseFulfillmentOrderReverseDeliveriesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseDeliveryConnectionQueryObject("reverseDeliveries");
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

    public function selectThirdPartyConfirmation(ShopifyReverseFulfillmentOrderThirdPartyConfirmationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseFulfillmentOrderThirdPartyConfirmationQueryObject("thirdPartyConfirmation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
