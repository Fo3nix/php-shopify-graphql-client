<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashManagementSystemReasonCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashManagementSystemReasonCode";

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
