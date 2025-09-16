<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class BlogFeedQueryObject extends QueryObject
{
    const OBJECT_NAME = "BlogFeed";

    public function selectLocation()
    {
        $this->selectField("location");

        return $this;
    }

    public function selectPath()
    {
        $this->selectField("path");

        return $this;
    }
}
