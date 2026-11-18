<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPageCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["page"];

    protected $page;

    /**
     * The properties of the new page.
     */
    public function setPage(ShopifyPageCreateInputInputObject $shopifyPageCreateInputInputObject): static
    {
        $this->page = $shopifyPageCreateInputInputObject;

        return $this;
    }
}
