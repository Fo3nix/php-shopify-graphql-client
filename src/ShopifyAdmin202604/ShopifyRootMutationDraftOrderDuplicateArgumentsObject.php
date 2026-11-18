<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDraftOrderDuplicateArgumentsObject extends ArgumentsObject
{
    protected $id;

    /**
     * The ID of the draft order to duplicate.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
