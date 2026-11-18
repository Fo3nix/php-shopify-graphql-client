<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationReverseDeliveryCreateWithShippingArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["reverseFulfillmentOrderId", "reverseDeliveryLineItems"];

    protected $reverseFulfillmentOrderId;
    protected $reverseDeliveryLineItems;
    protected $trackingInput;
    protected $labelInput;
    protected $notifyCustomer;

    /**
     * The ID of the reverse fulfillment order that's associated to the reverse delivery.
     */
    public function setReverseFulfillmentOrderId($reverseFulfillmentOrderId): static
    {
        $this->reverseFulfillmentOrderId = $reverseFulfillmentOrderId;

        return $this;
    }

    /**
     * The reverse delivery line items to be created. If an empty array is provided, then this mutation
     *           will create a reverse delivery line item for each reverse fulfillment order line item, with its quantity equal
     *           to the reverse fulfillment order line item total quantity.
     */
    public function setReverseDeliveryLineItems(array $reverseDeliveryLineItems): static
    {
        $this->reverseDeliveryLineItems = $reverseDeliveryLineItems;

        return $this;
    }

    /**
     * The tracking information for the reverse delivery.
     */
    public function setTrackingInput(ShopifyReverseDeliveryTrackingInputInputObject $shopifyReverseDeliveryTrackingInputInputObject): static
    {
        $this->trackingInput = $shopifyReverseDeliveryTrackingInputInputObject;

        return $this;
    }

    /**
     * The return label file information for the reverse delivery.
     */
    public function setLabelInput(ShopifyReverseDeliveryLabelInputInputObject $shopifyReverseDeliveryLabelInputInputObject): static
    {
        $this->labelInput = $shopifyReverseDeliveryLabelInputInputObject;

        return $this;
    }

    /**
     * When `true` the customer is notified with delivery instructions if the `ReverseFulfillmentOrder.order.email` is present.
     */
    public function setNotifyCustomer($notifyCustomer): static
    {
        $this->notifyCustomer = $notifyCustomer;

        return $this;
    }
}
