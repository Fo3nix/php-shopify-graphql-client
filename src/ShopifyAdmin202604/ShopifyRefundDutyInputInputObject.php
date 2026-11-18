<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to reimburse duties on a refund.
 */
class ShopifyRefundDutyInputInputObject extends InputObject
{
    const REQUIRED = ["dutyId"];

    protected $dutyId;
    protected $refundType;

    /**
     * The ID of the duty in the refund.
     */
    public function setDutyId($dutyId): static
    {
        $this->dutyId = $dutyId;

        return $this;
    }

    /**
     * The type of refund for this duty.
     */
    public function setRefundType($shopifyRefundDutyRefundType): static
    {
        $this->refundType = new RawObject($shopifyRefundDutyRefundType);

        return $this;
    }
}
