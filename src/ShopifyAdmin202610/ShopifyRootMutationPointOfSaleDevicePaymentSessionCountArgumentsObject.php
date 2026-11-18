<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPointOfSaleDevicePaymentSessionCountArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["pointOfSaleDevicePaymentSessionId", "balance", "staffMemberId"];

    protected $pointOfSaleDevicePaymentSessionId;
    protected $balance;
    protected $staffMemberId;
    protected $time;
    protected $reasonCodeId;
    protected $note;

    /**
     * The point of sale device payment session to record a count for.
     */
    public function setPointOfSaleDevicePaymentSessionId($pointOfSaleDevicePaymentSessionId): static
    {
        $this->pointOfSaleDevicePaymentSessionId = $pointOfSaleDevicePaymentSessionId;

        return $this;
    }

    /**
     * The counted cash drawer balance.
     */
    public function setBalance(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->balance = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The staff member who performed the count.
     */
    public function setStaffMemberId($staffMemberId): static
    {
        $this->staffMemberId = $staffMemberId;

        return $this;
    }

    /**
     * When the count was performed. Defaults to the current time.
     */
    public function setTime($time): static
    {
        $this->time = $time;

        return $this;
    }

    /**
     * The reason code for the count.
     */
    public function setReasonCodeId($reasonCodeId): static
    {
        $this->reasonCodeId = $reasonCodeId;

        return $this;
    }

    /**
     * The note entered when the count was performed.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }
}
