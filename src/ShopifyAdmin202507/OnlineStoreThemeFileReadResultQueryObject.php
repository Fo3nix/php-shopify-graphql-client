<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OnlineStoreThemeFileReadResultQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileReadResult";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectFilename()
    {
        $this->selectField("filename");

        return $this;
    }
}
