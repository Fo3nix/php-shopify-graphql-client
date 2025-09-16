<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectCapabilityDataPublishableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilityDataPublishable";

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
