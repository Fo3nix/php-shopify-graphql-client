<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerSegmentMembersQueryQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSegmentMembersQuery";

    public function selectCurrentCount()
    {
        $this->selectField("currentCount");

        return $this;
    }

    public function selectDone()
    {
        $this->selectField("done");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
