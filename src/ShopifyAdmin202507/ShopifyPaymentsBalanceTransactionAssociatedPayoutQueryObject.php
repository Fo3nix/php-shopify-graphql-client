<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsBalanceTransactionAssociatedPayoutQueryObject extends QueryObject
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
