<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectCapabilityDataOnlineStoreQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilityDataOnlineStore";

    public function selectTemplateSuffix()
    {
        $this->selectField("templateSuffix");

        return $this;
    }
}
