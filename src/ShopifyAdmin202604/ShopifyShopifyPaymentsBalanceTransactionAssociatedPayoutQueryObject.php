<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The payout associated with a balance transaction.
 */
class ShopifyShopifyPaymentsBalanceTransactionAssociatedPayoutQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsBalanceTransactionAssociatedPayout";

    /**
     * The ID of the payout associated with the balance transaction.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The status of the payout associated with the balance transaction.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
