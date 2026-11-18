<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationUrlRedirectCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["urlRedirect"];

    protected $urlRedirect;

    /**
     * The fields to use when creating the redirect.
     */
    public function setUrlRedirect(ShopifyUrlRedirectInputInputObject $shopifyUrlRedirectInputInputObject): static
    {
        $this->urlRedirect = $shopifyUrlRedirectInputInputObject;

        return $this;
    }
}
