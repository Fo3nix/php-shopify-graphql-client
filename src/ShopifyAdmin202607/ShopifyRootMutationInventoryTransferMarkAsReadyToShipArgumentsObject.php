<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryTransferMarkAsReadyToShipArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the inventory transfer to mark as ready to ship.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
