<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ApiVersionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ApiVersion";

    public function selectDisplayName()
    {
        $this->selectField("displayName");

        return $this;
    }

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }

    public function selectSupported()
    {
        $this->selectField("supported");

        return $this;
    }
}
