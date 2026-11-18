<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationBlogUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "blog"];

    protected $id;
    protected $blog;

    /**
     * The ID of the blog to be updated.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The properties of the blog to be updated.
     */
    public function setBlog(ShopifyBlogUpdateInputInputObject $shopifyBlogUpdateInputInputObject): static
    {
        $this->blog = $shopifyBlogUpdateInputInputObject;

        return $this;
    }
}
