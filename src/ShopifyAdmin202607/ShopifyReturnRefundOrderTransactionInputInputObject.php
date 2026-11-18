<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to create order transactions when refunding a return.
 */
class ShopifyReturnRefundOrderTransactionInputInputObject extends InputObject
{
    const REQUIRED = ["transactionAmount", "parentId"];

    protected $transactionAmount;
    protected $parentId;

    /**
     * The amount of money for the transaction in the presentment currency of the order.
     */
    public function setTransactionAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->transactionAmount = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The ID of the parent order transaction. The transaction must be of kind `CAPTURE` or a `SALE`.
     */
    public function setParentId($parentId): static
    {
        $this->parentId = $parentId;

        return $this;
    }
}
