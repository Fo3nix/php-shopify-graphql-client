<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationReverseDeliveryShippingUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["reverseDeliveryId"];

    protected $reverseDeliveryId;
    protected $trackingInput;
    protected $labelInput;
    protected $notifyCustomer;

    /**
     * The ID of the reverse delivery to update.
     */
    public function setReverseDeliveryId($reverseDeliveryId): static
    {
        $this->reverseDeliveryId = $reverseDeliveryId;

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
     * If `true` and an email address exists on the `ReverseFulfillmentOrder.order`, then the customer is notified with the updated delivery instructions.
     */
    public function setNotifyCustomer($notifyCustomer): static
    {
        $this->notifyCustomer = $notifyCustomer;

        return $this;
    }
}
