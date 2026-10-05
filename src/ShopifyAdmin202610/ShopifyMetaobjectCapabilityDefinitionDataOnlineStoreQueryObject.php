<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectCapabilityDefinitionDataOnlineStoreQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilityDefinitionDataOnlineStore";

    public function selectCanCreateRedirects()
    {
        $this->selectField("canCreateRedirects");

        return $this;
    }

    public function selectUrlHandle()
    {
        $this->selectField("urlHandle");

        return $this;
    }
}
