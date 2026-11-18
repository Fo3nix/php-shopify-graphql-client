<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to create or update a URL redirect.
 */
class ShopifyUrlRedirectInputInputObject extends InputObject
{
    protected $path;
    protected $target;

    /**
     * The old path to be redirected from. When the user visits this path, they will be redirected to the target location.
     */
    public function setPath($path): static
    {
        $this->path = $path;

        return $this;
    }

    /**
     * The target location where the user will be redirected to.
     */
    public function setTarget($target): static
    {
        $this->target = $target;

        return $this;
    }
}
