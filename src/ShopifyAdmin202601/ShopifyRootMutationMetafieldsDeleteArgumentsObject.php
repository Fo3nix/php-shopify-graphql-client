<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMetafieldsDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["metafields"];

    protected $metafields;

    /**
     * A list of identifiers specifying metafields to delete. At least one identifier must be specified.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }
}
