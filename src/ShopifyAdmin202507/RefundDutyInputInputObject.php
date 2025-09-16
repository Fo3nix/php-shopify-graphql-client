<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class RefundDutyInputInputObject extends InputObject
{
    protected $dutyId;
    protected $refundType;

    public function setDutyId($dutyId)
    {
        $this->dutyId = $dutyId;

        return $this;
    }

    public function setRefundType($refundType)
    {
        $this->refundType = $refundType;

        return $this;
    }
}
