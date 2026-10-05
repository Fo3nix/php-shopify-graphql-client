<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderDisputeSummaryQueryObject extends QueryObject
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
