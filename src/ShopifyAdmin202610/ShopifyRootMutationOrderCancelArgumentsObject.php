<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationOrderCancelArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["orderId", "restock", "reason"];

    protected $orderId;
    protected $refundMethod;
    protected $restock;
    protected $reason;
    protected $notifyCustomer;
    protected $staffNote;

    /**
     * The ID of the order to be canceled.
     */
    public function setOrderId($orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Indicates how to refund the amount paid by the customer. Authorized payments will be voided regardless of this setting.
     */
    public function setRefundMethod(ShopifyOrderCancelRefundMethodInputInputObject $shopifyOrderCancelRefundMethodInputInputObject): static
    {
        $this->refundMethod = $shopifyOrderCancelRefundMethodInputInputObject;

        return $this;
    }

    /**
     * Whether to restock the inventory committed to the order. For unpaid orders fulfilled from locations that have been deactivated, inventory will not be restocked to the deactivated locations even if this argument is set to true.
     */
    public function setRestock($restock): static
    {
        $this->restock = $restock;

        return $this;
    }

    /**
     * The reason for canceling the order.
     */
    public function setReason($shopifyOrderCancelReason): static
    {
        $this->reason = new RawObject($shopifyOrderCancelReason);

        return $this;
    }

    /**
     * Whether to send a notification to the customer about the order cancellation.
     */
    public function setNotifyCustomer($notifyCustomer): static
    {
        $this->notifyCustomer = $notifyCustomer;

        return $this;
    }

    /**
     * A staff-facing note about the order cancellation. This is not visible to the customer. Maximum length of 255 characters.
     */
    public function setStaffNote($staffNote): static
    {
        $this->staffNote = $staffNote;

        return $this;
    }
}
