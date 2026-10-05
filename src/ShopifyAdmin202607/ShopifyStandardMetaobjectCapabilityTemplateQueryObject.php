<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStandardMetaobjectCapabilityTemplateQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetaobjectCapabilityTemplate";

    public function selectCapabilityType()
    {
        $this->selectField("capabilityType");

        return $this;
    }
}
