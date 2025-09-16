<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MediaImageOriginalSourceQueryObject extends QueryObject
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
