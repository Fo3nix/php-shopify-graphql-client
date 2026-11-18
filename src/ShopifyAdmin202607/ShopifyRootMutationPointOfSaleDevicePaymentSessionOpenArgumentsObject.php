<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPointOfSaleDevicePaymentSessionOpenArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["pointOfSaleDeviceId", "staffMemberId"];

    protected $pointOfSaleDeviceId;
    protected $balance;
    protected $staffMemberId;
    protected $time;
    protected $reasonCodeId;
    protected $note;

    /**
     * The point of sale device to which this session belongs.
     */
    public function setPointOfSaleDeviceId($pointOfSaleDeviceId): static
    {
        $this->pointOfSaleDeviceId = $pointOfSaleDeviceId;

        return $this;
    }

    /**
     * The counted cash drawer balance when the session was opened.
     */
    public function setBalance(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->balance = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The staff member who opened the session.
     */
    public function setStaffMemberId($staffMemberId): static
    {
        $this->staffMemberId = $staffMemberId;

        return $this;
    }

    /**
     * The time the session was opened. Defaults to the current time.
     */
    public function setTime($time): static
    {
        $this->time = $time;

        return $this;
    }

    /**
     * The reason code for the session opening.
     */
    public function setReasonCodeId($reasonCodeId): static
    {
        $this->reasonCodeId = $reasonCodeId;

        return $this;
    }

    /**
     * The note entered when the session was opened.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }
}
