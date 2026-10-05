<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashManagementCustomReasonCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashManagementCustomReasonCode";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
