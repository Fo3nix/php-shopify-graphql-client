<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationShopifyPaymentsPayoutAlternateCurrencyCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["currency"];

    protected $accountId;
    protected $currency;

    /**
     * The ID of the Shopify Payments account on which the mutation is being performed.
     */
    public function setAccountId($accountId): static
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * The currency of the balance to payout.
     */
    public function setCurrency($shopifyCurrencyCode): static
    {
        $this->currency = new RawObject($shopifyCurrencyCode);

        return $this;
    }
}
