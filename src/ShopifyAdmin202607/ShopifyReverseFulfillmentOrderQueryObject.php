<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A group of one or more items in a return that will be processed at a fulfillment service.
 * There can be more than one reverse fulfillment order for a return at a given location.
 */
class ShopifyReverseFulfillmentOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrder";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The list of reverse fulfillment order line items for the reverse fulfillment order.
     */
    public function selectLineItems(?ShopifyReverseFulfillmentOrderLineItemsArgumentsObject $argsObject = null): ShopifyReverseFulfillmentOrderLineItemConnectionQueryObject
    {
        $object = new ShopifyReverseFulfillmentOrderLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order associated with the reverse fulfillment order.
     */
    public function selectOrder(?ShopifyReverseFulfillmentOrderOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of reverse deliveries for the reverse fulfillment order.
     */
    public function selectReverseDeliveries(?ShopifyReverseFulfillmentOrderReverseDeliveriesArgumentsObject $argsObject = null): ShopifyReverseDeliveryConnectionQueryObject
    {
        $object = new ShopifyReverseDeliveryConnectionQueryObject("reverseDeliveries");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of the reverse fulfillment order.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The current confirmation for the reverse fulfillment order from a third-party logistics service.
     * If no third-party service is involved, then this value is `nil`.
     */
    public function selectThirdPartyConfirmation(?ShopifyReverseFulfillmentOrderThirdPartyConfirmationArgumentsObject $argsObject = null): ShopifyReverseFulfillmentOrderThirdPartyConfirmationQueryObject
    {
        $object = new ShopifyReverseFulfillmentOrderThirdPartyConfirmationQueryObject("thirdPartyConfirmation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
