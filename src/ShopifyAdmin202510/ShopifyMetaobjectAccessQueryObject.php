<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectAccessQueryObject extends QueryObject
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
