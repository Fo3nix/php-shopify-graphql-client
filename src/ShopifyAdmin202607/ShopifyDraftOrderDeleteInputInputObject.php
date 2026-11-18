<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to specify the draft order to delete by its ID.
 */
class ShopifyDraftOrderDeleteInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the draft order to delete.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
