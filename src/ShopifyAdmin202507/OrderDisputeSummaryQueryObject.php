<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OrderDisputeSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderDisputeSummary";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInitiatedAs()
    {
        $this->selectField("initiatedAs");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
