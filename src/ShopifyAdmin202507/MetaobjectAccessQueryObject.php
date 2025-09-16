<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectAccessQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectAccess";

    public function selectAdmin()
    {
        $this->selectField("admin");

        return $this;
    }

    public function selectStorefront()
    {
        $this->selectField("storefront");

        return $this;
    }
}
