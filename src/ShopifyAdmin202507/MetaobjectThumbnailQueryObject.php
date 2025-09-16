<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectThumbnailQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectThumbnail";

    public function selectHex()
    {
        $this->selectField("hex");

        return $this;
    }
}
