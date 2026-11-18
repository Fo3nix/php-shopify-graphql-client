<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentTrackingInfoUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["fulfillmentId", "trackingInfoInput"];

    protected $fulfillmentId;
    protected $trackingInfoInput;
    protected $notifyCustomer;

    /**
     * The ID of the fulfillment.
     */
    public function setFulfillmentId($fulfillmentId): static
    {
        $this->fulfillmentId = $fulfillmentId;

        return $this;
    }

    /**
     * The tracking input for the mutation, including tracking URL, number, and company.
     */
    public function setTrackingInfoInput(ShopifyFulfillmentTrackingInputInputObject $shopifyFulfillmentTrackingInputInputObject): static
    {
        $this->trackingInfoInput = $shopifyFulfillmentTrackingInputInputObject;

        return $this;
    }

    /**
     * Whether the customer will be notified of this update and future updates for the fulfillment.
     * If this field is left blank, then notifications won't be sent to the customer when the fulfillment is updated.
     */
    public function setNotifyCustomer($notifyCustomer): static
    {
        $this->notifyCustomer = $notifyCustomer;

        return $this;
    }
}
