<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a store credit account credit transaction.
 */
class ShopifyStoreCreditAccountCreditInputInputObject extends InputObject
{
    const REQUIRED = ["creditAmount"];

    protected $creditAmount;
    protected $expiresAt;
    protected $notify;

    /**
     * The amount to credit the store credit account.
     */
    public function setCreditAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->creditAmount = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The date and time when the credit expires.
     */
    public function setExpiresAt($expiresAt): static
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    /**
     * Whether to send a notification to the account owner when the store credit is issued.
     * Defaults to `false`.
     */
    public function setNotify($notify): static
    {
        $this->notify = $notify;

        return $this;
    }
}
