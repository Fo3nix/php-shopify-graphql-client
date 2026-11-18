<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for the fulfillment hold applied on the fulfillment order.
 */
class ShopifyFulfillmentOrderHoldInputInputObject extends InputObject
{
    const REQUIRED = ["reason"];

    protected $reason;
    protected $reasonNotes;
    protected $notifyMerchant;
    protected $externalId;
    protected $handle;
    protected $fulfillmentOrderLineItems;

    /**
     * The reason for the fulfillment hold.
     */
    public function setReason($shopifyFulfillmentHoldReason): static
    {
        $this->reason = new RawObject($shopifyFulfillmentHoldReason);

        return $this;
    }

    /**
     * Additional information about the fulfillment hold reason.
     */
    public function setReasonNotes($reasonNotes): static
    {
        $this->reasonNotes = $reasonNotes;

        return $this;
    }

    /**
     * Whether the merchant receives a notification about the fulfillment hold. The default value is `false`.
     */
    public function setNotifyMerchant($notifyMerchant): static
    {
        $this->notifyMerchant = $notifyMerchant;

        return $this;
    }

    /**
     * A configurable ID used to track the automation system releasing these holds.
     */
    public function setExternalId($externalId): static
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * An identifier that an app can use to reference one of the holds that it applies to a
     * fulfillment order.
     *
     * This field must be unique among the holds that a single app applies to a single fulfillment order.
     * It prevents apps from inadvertently creating duplicate holds.
     * This field cannot exceed 64 characters.
     *
     * For example, an app can place multiple holds on a single fulfillment order each with a different `handle`.
     * If an app attempts to place two holds with the same `handle`, the second hold will be rejected with
     * [a duplicate hold user error](https://shopify.dev/api/admin-graphql/latest/enums/FulfillmentOrderHoldUserErrorCode#value-duplicatefulfillmentholdhandle).
     * The same `handle` can however be re-used on different fulfillment orders and by different apps.
     *
     * By default, `handle` will be an empty string. If an app wishes to place multiple holds on a single
     * fulfillment order, then a different `handle` must be provided for each.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * The fulfillment order line items to be placed on hold.
     *
     * If left blank, all line items of the fulfillment order are placed on hold.
     *
     * Not supported when placing a hold on a fulfillment order that is already held.
     * If supplied when a fulfillment order is already on hold, [a user error](https://shopify.dev/api/admin-graphql/latest/enums/FulfillmentOrderHoldUserErrorCode#value-fulfillmentordernotsplittable)
     * will be returned indicating that the fulfillment order is not able to be split.
     */
    public function setFulfillmentOrderLineItems(array $fulfillmentOrderLineItems): static
    {
        $this->fulfillmentOrderLineItems = $fulfillmentOrderLineItems;

        return $this;
    }
}
