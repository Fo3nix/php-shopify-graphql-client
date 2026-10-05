<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectCapabilityDataPublishableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilityDataPublishable";

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
