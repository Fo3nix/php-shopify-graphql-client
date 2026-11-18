<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCarrierServiceDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The global ID of the carrier service to delete.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
