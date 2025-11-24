<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMediaImageOriginalSourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "MediaImageOriginalSource";

    public function selectFileSize()
    {
        $this->selectField("fileSize");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
