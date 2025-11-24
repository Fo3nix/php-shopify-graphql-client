<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootShopLocalesArgumentsObject extends ArgumentsObject
{
    protected $published;

    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }
}
