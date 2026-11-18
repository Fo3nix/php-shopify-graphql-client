<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMetafieldsSetArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["metafields"];

    protected $metafields;

    /**
     * The list of metafield values to set. Maximum of 25.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }
}
