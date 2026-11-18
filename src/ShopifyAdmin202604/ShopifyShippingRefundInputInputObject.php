<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields that are required to reimburse shipping costs.
 */
class ShopifyShippingRefundInputInputObject extends InputObject
{
    protected $amount;
    protected $fullRefund;

    /**
     * The monetary value of the shipping fees to be reimbursed.
     */
    public function setAmount($amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Whether a full refund is provided.
     */
    public function setFullRefund($fullRefund): static
    {
        $this->fullRefund = $fullRefund;

        return $this;
    }
}
