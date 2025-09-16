<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class WebPixelQueryObject extends QueryObject
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
