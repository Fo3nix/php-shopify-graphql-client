<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyWebPixelQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebPixel";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectSettings()
    {
        $this->selectField("settings");

        return $this;
    }
}
