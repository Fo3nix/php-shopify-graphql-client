<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shipment of one or more items from an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order). Tracks which [`LineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) objects ship, their quantities, and the shipment's tracking information.
 *
 * Includes tracking details such as the carrier, tracking numbers, and URLs. The fulfillment connects to both the original order and any associated [`FulfillmentOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder) objects. [`FulfillmentEvent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentEvent) objects record milestones throughout the shipment lifecycle, from creation through delivery.
 *
 * Multiple fulfillments can exist for a single order when items either ship separately or from different locations.
 */
class ShopifyFulfillmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "Fulfillment";

    /**
     * The date and time when the fulfillment was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The date that this fulfillment was delivered.
     */
    public function selectDeliveredAt(): static
    {
        $this->selectField("deliveredAt");

        return $this;
    }

    /**
     * Human readable display status for this fulfillment.
     */
    public function selectDisplayStatus(): static
    {
        $this->selectField("displayStatus");

        return $this;
    }

    /**
     * The estimated date that this fulfillment will arrive.
     */
    public function selectEstimatedDeliveryAt(): static
    {
        $this->selectField("estimatedDeliveryAt");

        return $this;
    }

    /**
     * The history of events associated with this fulfillment.
     */
    public function selectEvents(?ShopifyFulfillmentEventsArgumentsObject $argsObject = null): ShopifyFulfillmentEventConnectionQueryObject
    {
        $object = new ShopifyFulfillmentEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of the fulfillment's line items.
     */
    public function selectFulfillmentLineItems(?ShopifyFulfillmentFulfillmentLineItemsArgumentsObject $argsObject = null): ShopifyFulfillmentLineItemConnectionQueryObject
    {
        $object = new ShopifyFulfillmentLineItemConnectionQueryObject("fulfillmentLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A paginated list of fulfillment orders for the fulfillment.
     */
    public function selectFulfillmentOrders(?ShopifyFulfillmentFulfillmentOrdersArgumentsObject $argsObject = null): ShopifyFulfillmentOrderConnectionQueryObject
    {
        $object = new ShopifyFulfillmentOrderConnectionQueryObject("fulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The date and time when the fulfillment went into transit.
     */
    public function selectInTransitAt(): static
    {
        $this->selectField("inTransitAt");

        return $this;
    }

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    /**
     * The location that the fulfillment was processed at.
     */
    public function selectLocation(?ShopifyFulfillmentLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Human readable reference identifier for this fulfillment.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The order for which the fulfillment was created.
     */
    public function selectOrder(?ShopifyFulfillmentOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The address at which the fulfillment occurred. This field is intended for tax purposes, as a full address is required for tax providers to accurately calculate taxes. Typically this is the address of the warehouse or fulfillment center. To retrieve a fulfillment location's address, use the `assignedLocation` field on the [`FulfillmentOrder`](/docs/api/admin-graphql/latest/objects/FulfillmentOrder) object instead.
     */
    public function selectOriginAddress(?ShopifyFulfillmentOriginAddressArgumentsObject $argsObject = null): ShopifyFulfillmentOriginAddressQueryObject
    {
        $object = new ShopifyFulfillmentOriginAddressQueryObject("originAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether any of the line items in the fulfillment require shipping.
     */
    public function selectRequiresShipping(): static
    {
        $this->selectField("requiresShipping");

        return $this;
    }

    /**
     * Fulfillment service associated with the fulfillment.
     */
    public function selectService(?ShopifyFulfillmentServiceArgumentsObject $argsObject = null): ShopifyFulfillmentServiceQueryObject
    {
        $object = new ShopifyFulfillmentServiceQueryObject("service");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The optional shipping label for this fulfillment.
     */
    public function selectShippingLabel(?ShopifyFulfillmentShippingLabelArgumentsObject $argsObject = null): ShopifyShippingLabelQueryObject
    {
        $object = new ShopifyShippingLabelQueryObject("shippingLabel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of the fulfillment.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * Sum of all line item quantities for the fulfillment.
     */
    public function selectTotalQuantity(): static
    {
        $this->selectField("totalQuantity");

        return $this;
    }

    /**
     * Tracking information associated with the fulfillment,
     * such as the tracking company, tracking number, and tracking URL.
     */
    public function selectTrackingInfo(?ShopifyFulfillmentTrackingInfoArgumentsObject $argsObject = null): ShopifyFulfillmentTrackingInfoQueryObject
    {
        $object = new ShopifyFulfillmentTrackingInfoQueryObject("trackingInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the fulfillment was last modified.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
