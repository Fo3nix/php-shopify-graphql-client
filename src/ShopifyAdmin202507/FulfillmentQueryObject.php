<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "Fulfillment";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectDeliveredAt()
    {
        $this->selectField("deliveredAt");

        return $this;
    }

    public function selectDisplayStatus()
    {
        $this->selectField("displayStatus");

        return $this;
    }

    public function selectEstimatedDeliveryAt()
    {
        $this->selectField("estimatedDeliveryAt");

        return $this;
    }

    public function selectEvents(FulfillmentEventsArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentLineItems(FulfillmentFulfillmentLineItemsArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentLineItemConnectionQueryObject("fulfillmentLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentOrders(FulfillmentFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderConnectionQueryObject("fulfillmentOrders");
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

    public function selectInTransitAt()
    {
        $this->selectField("inTransitAt");

        return $this;
    }

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectLocation(FulfillmentLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectOrder(FulfillmentOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginAddress(FulfillmentOriginAddressArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOriginAddressQueryObject("originAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRequiresShipping()
    {
        $this->selectField("requiresShipping");

        return $this;
    }

    public function selectService(FulfillmentServiceArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentServiceQueryObject("service");
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

    public function selectTotalQuantity()
    {
        $this->selectField("totalQuantity");

        return $this;
    }

    public function selectTrackingInfo(FulfillmentTrackingInfoArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentTrackingInfoQueryObject("trackingInfo");
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
