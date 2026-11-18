<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationShippingPackageMakeDefaultArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the shipping package to set as the default.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
