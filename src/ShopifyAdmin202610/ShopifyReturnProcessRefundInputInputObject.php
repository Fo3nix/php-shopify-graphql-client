<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the refund for the return.
 */
class ShopifyReturnProcessRefundInputInputObject extends InputObject
{
    const REQUIRED = ["orderTransactions"];

    protected $allowOverRefunding;
    protected $orderTransactions;
    protected $refundMethods;

    /**
     * Whether refunds to the original payment method can cause the total refunded amount, including previously issued store credit, to exceed the amount paid for the order. Refunds issued as store credit can't exceed the amount paid.
     */
    public function setAllowOverRefunding($allowOverRefunding): static
    {
        $this->allowOverRefunding = $allowOverRefunding;

        return $this;
    }

    /**
     * The order transactions for the refund.
     */
    public function setOrderTransactions(array $orderTransactions): static
    {
        $this->orderTransactions = $orderTransactions;

        return $this;
    }

    /**
     * A list of instructions to process the financial outcome of the refund.
     */
    public function setRefundMethods(array $refundMethods): static
    {
        $this->refundMethods = $refundMethods;

        return $this;
    }
}
