<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrder";

    public function selectAssignedLocation(FulfillmentOrderAssignedLocationArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderAssignedLocationQueryObject("assignedLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChannelId()
    {
        $this->selectField("channelId");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectDeliveryMethod(FulfillmentOrderDeliveryMethodArgumentsObject $argsObject = null)
    {
        $object = new DeliveryMethodQueryObject("deliveryMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDestination(FulfillmentOrderDestinationArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderDestinationQueryObject("destination");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillAt()
    {
        $this->selectField("fulfillAt");

        return $this;
    }

    public function selectFulfillBy()
    {
        $this->selectField("fulfillBy");

        return $this;
    }

    public function selectFulfillmentHolds(FulfillmentOrderFulfillmentHoldsArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentHoldQueryObject("fulfillmentHolds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentOrdersForMerge(FulfillmentOrderFulfillmentOrdersForMergeArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderConnectionQueryObject("fulfillmentOrdersForMerge");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillments(FulfillmentOrderFulfillmentsArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentConnectionQueryObject("fulfillments");
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

    public function selectInternationalDuties(FulfillmentOrderInternationalDutiesArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderInternationalDutiesQueryObject("internationalDuties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLineItems(FulfillmentOrderLineItemsArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationsForMove(FulfillmentOrderLocationsForMoveArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderLocationForMoveConnectionQueryObject("locationsForMove");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMerchantRequests(FulfillmentOrderMerchantRequestsArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderMerchantRequestConnectionQueryObject("merchantRequests");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrder(FulfillmentOrderOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrderId()
    {
        $this->selectField("orderId");

        return $this;
    }

    public function selectOrderName()
    {
        $this->selectField("orderName");

        return $this;
    }

    public function selectOrderProcessedAt()
    {
        $this->selectField("orderProcessedAt");

        return $this;
    }

    public function selectRequestStatus()
    {
        $this->selectField("requestStatus");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectSupportedActions(FulfillmentOrderSupportedActionsArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderSupportedActionQueryObject("supportedActions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
