<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectCapabilitiesTranslatableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilitiesTranslatable";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
