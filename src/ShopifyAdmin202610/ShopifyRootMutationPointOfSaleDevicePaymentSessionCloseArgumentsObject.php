<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPointOfSaleDevicePaymentSessionCloseArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["pointOfSaleDevicePaymentSessionId", "balance", "staffMemberId"];

    protected $pointOfSaleDevicePaymentSessionId;
    protected $balance;
    protected $staffMemberId;
    protected $time;
    protected $reasonCodeId;
    protected $note;

    /**
     * The point of sale device payment session to be closed.
     */
    public function setPointOfSaleDevicePaymentSessionId($pointOfSaleDevicePaymentSessionId): static
    {
        $this->pointOfSaleDevicePaymentSessionId = $pointOfSaleDevicePaymentSessionId;

        return $this;
    }

    /**
     * The counted cash drawer balance when the session was closed.
     */
    public function setBalance(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->balance = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The staff member who closed the session.
     */
    public function setStaffMemberId($staffMemberId): static
    {
        $this->staffMemberId = $staffMemberId;

        return $this;
    }

    /**
     * When the session was closed. Defaults to the current time.
     */
    public function setTime($time): static
    {
        $this->time = $time;

        return $this;
    }

    /**
     * The reason code for closing the session.
     */
    public function setReasonCodeId($reasonCodeId): static
    {
        $this->reasonCodeId = $reasonCodeId;

        return $this;
    }

    /**
     * The note entered when the session was closed.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }
}
