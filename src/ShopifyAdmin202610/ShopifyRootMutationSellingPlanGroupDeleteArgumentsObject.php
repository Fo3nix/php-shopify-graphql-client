<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSellingPlanGroupDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The id of the selling plan group to delete.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
