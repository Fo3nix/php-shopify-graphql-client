<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrder";

    public function selectAssignedLocation(ShopifyFulfillmentOrderAssignedLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderAssignedLocationQueryObject("assignedLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use [`order.attribution.handle`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttribution#field-OrderAttribution.fields.handle) instead.
     */
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

    public function selectDeliveryMethod(ShopifyFulfillmentOrderDeliveryMethodArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryMethodQueryObject("deliveryMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDestination(ShopifyFulfillmentOrderDestinationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderDestinationQueryObject("destination");
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

    public function selectFulfillmentHolds(ShopifyFulfillmentOrderFulfillmentHoldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentHoldQueryObject("fulfillmentHolds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentOrdersForMerge(ShopifyFulfillmentOrderFulfillmentOrdersForMergeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderConnectionQueryObject("fulfillmentOrdersForMerge");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillments(ShopifyFulfillmentOrderFulfillmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentConnectionQueryObject("fulfillments");
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

    public function selectInternationalDuties(ShopifyFulfillmentOrderInternationalDutiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderInternationalDutiesQueryObject("internationalDuties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLineItems(ShopifyFulfillmentOrderLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationsForMove(ShopifyFulfillmentOrderLocationsForMoveArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderLocationForMoveConnectionQueryObject("locationsForMove");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMerchantRequests(ShopifyFulfillmentOrderMerchantRequestsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderMerchantRequestConnectionQueryObject("merchantRequests");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrder(ShopifyFulfillmentOrderOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
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

    public function selectRemainingLineItemsWeight(ShopifyFulfillmentOrderRemainingLineItemsWeightArgumentsObject $argsObject = null)
    {
        $object = new ShopifyWeightQueryObject("remainingLineItemsWeight");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    public function selectSupportedActions(ShopifyFulfillmentOrderSupportedActionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderSupportedActionQueryObject("supportedActions");
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
