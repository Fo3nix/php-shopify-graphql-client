<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectThumbnailQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectThumbnail";

    public function selectHex()
    {
        $this->selectField("hex");

        return $this;
    }
}
