<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationUrlRedirectUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "urlRedirect"];

    protected $id;
    protected $urlRedirect;

    /**
     * The ID of the URL redirect to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields required to update the URL redirect.
     */
    public function setUrlRedirect(ShopifyUrlRedirectInputInputObject $shopifyUrlRedirectInputInputObject): static
    {
        $this->urlRedirect = $shopifyUrlRedirectInputInputObject;

        return $this;
    }
}
