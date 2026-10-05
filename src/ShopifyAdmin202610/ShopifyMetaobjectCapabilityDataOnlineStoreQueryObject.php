<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectCapabilityDataOnlineStoreQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilityDataOnlineStore";

    public function selectTemplateSuffix()
    {
        $this->selectField("templateSuffix");

        return $this;
    }
}
