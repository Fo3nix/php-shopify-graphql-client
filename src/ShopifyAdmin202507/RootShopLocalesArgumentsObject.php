<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootShopLocalesArgumentsObject extends ArgumentsObject
{
    protected $published;

    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }
}
