<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectCapabilityDefinitionDataOnlineStoreQueryObject extends QueryObject
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
