<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the financial transfer for the return.
 */
class ShopifyReturnProcessFinancialTransferInputInputObject extends InputObject
{
    protected $issueRefund;

    /**
     * Issue a refund for the return.
     */
    public function setIssueRefund(ShopifyReturnProcessRefundInputInputObject $shopifyReturnProcessRefundInputInputObject): static
    {
        $this->issueRefund = $shopifyReturnProcessRefundInputInputObject;

        return $this;
    }
}
