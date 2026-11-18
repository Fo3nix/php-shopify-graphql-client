<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPointOfSaleDevicePaymentSessionAdjustArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["pointOfSaleDevicePaymentSessionId", "cash", "staffMemberId"];

    protected $pointOfSaleDevicePaymentSessionId;
    protected $cash;
    protected $staffMemberId;
    protected $reasonCodeId;
    protected $note;
    protected $time;

    /**
     * The point of sale device payment session to be adjusted.
     */
    public function setPointOfSaleDevicePaymentSessionId($pointOfSaleDevicePaymentSessionId): static
    {
        $this->pointOfSaleDevicePaymentSessionId = $pointOfSaleDevicePaymentSessionId;

        return $this;
    }

    /**
     * The amount of cash being added or removed.
     */
    public function setCash(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->cash = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The staff member who made the adjustment.
     */
    public function setStaffMemberId($staffMemberId): static
    {
        $this->staffMemberId = $staffMemberId;

        return $this;
    }

    /**
     * The reason code for the adjustment.
     */
    public function setReasonCodeId($reasonCodeId): static
    {
        $this->reasonCodeId = $reasonCodeId;

        return $this;
    }

    /**
     * The note entered when the adjustment was made.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * The time when the adjustment was made. Defaults to the current time.
     */
    public function setTime($time): static
    {
        $this->time = $time;

        return $this;
    }
}
