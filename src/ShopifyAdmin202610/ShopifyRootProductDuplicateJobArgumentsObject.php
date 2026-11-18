<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootProductDuplicateJobArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * An ID of a product duplicate job to fetch.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
