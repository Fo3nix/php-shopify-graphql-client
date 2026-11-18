<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPageUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "page"];

    protected $id;
    protected $page;

    /**
     * The ID of the page to be updated.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The properties of the page to be updated.
     */
    public function setPage(ShopifyPageUpdateInputInputObject $shopifyPageUpdateInputInputObject): static
    {
        $this->page = $shopifyPageUpdateInputInputObject;

        return $this;
    }
}
