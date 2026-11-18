<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationGiftCardDeactivateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the gift card to deactivate.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
