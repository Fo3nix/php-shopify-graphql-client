<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to process a refund to store credit.
 */
class ShopifyStoreCreditRefundInputInputObject extends InputObject
{
    const REQUIRED = ["amount"];

    protected $amount;
    protected $expiresAt;

    /**
     * The amount to be issued as store credit.
     */
    public function setAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->amount = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * An optional expiration date for the store credit being issued.
     */
    public function setExpiresAt($expiresAt): static
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }
}
