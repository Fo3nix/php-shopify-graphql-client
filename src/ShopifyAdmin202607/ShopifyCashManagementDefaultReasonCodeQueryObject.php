<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashManagementDefaultReasonCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashManagementDefaultReasonCode";

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
