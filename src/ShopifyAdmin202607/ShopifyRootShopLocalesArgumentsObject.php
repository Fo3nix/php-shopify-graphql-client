<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootShopLocalesArgumentsObject extends ArgumentsObject
{
    protected $published;

    /**
     * Return only published locales.
     */
    public function setPublished($published): static
    {
        $this->published = $published;

        return $this;
    }
}
