<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySEOQueryObject extends QueryObject
{
    const OBJECT_NAME = "SEO";

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
