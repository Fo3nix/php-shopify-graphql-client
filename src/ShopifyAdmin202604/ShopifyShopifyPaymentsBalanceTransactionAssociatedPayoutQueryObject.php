<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsBalanceTransactionAssociatedPayoutQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsBalanceTransactionAssociatedPayout";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
