<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StandardMetaobjectCapabilityTemplateQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetaobjectCapabilityTemplate";

    public function selectCapabilityType()
    {
        $this->selectField("capabilityType");

        return $this;
    }
}
