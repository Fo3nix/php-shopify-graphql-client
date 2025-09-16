<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectCapabilitiesPublishableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilitiesPublishable";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
