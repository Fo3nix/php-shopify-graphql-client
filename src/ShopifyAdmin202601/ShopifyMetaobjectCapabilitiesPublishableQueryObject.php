<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectCapabilitiesPublishableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilitiesPublishable";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
