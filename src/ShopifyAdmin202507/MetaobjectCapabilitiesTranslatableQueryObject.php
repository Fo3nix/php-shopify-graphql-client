<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectCapabilitiesTranslatableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilitiesTranslatable";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
