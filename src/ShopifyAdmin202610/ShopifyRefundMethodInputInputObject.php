<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for processing the financial outcome of a refund.
 */
class ShopifyRefundMethodInputInputObject extends InputObject
{
    protected $storeCreditRefund;

    /**
     * The details of the refund to store credit.
     */
    public function setStoreCreditRefund(ShopifyStoreCreditRefundInputInputObject $shopifyStoreCreditRefundInputInputObject): static
    {
        $this->storeCreditRefund = $shopifyStoreCreditRefundInputInputObject;

        return $this;
    }
}
