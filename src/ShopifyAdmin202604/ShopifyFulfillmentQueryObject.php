<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentQueryObject extends QueryObject
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

    public function selectEvents(ShopifyFulfillmentEventsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentLineItems(ShopifyFulfillmentFulfillmentLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentLineItemConnectionQueryObject("fulfillmentLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentOrders(ShopifyFulfillmentFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderConnectionQueryObject("fulfillmentOrders");
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

    public function selectLocation(ShopifyFulfillmentLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("location");
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

    public function selectOrder(ShopifyFulfillmentOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginAddress(ShopifyFulfillmentOriginAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOriginAddressQueryObject("originAddress");
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

    public function selectService(ShopifyFulfillmentServiceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentServiceQueryObject("service");
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

    public function selectTrackingInfo(ShopifyFulfillmentTrackingInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentTrackingInfoQueryObject("trackingInfo");
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
