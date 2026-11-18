<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationBlogCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["blog"];

    protected $blog;

    /**
     * The properties of the new blog.
     */
    public function setBlog(ShopifyBlogCreateInputInputObject $shopifyBlogCreateInputInputObject): static
    {
        $this->blog = $shopifyBlogCreateInputInputObject;

        return $this;
    }
}
