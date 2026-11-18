<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationReturnLineItemRemoveFromReturnArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["returnId", "returnLineItems"];

    protected $returnId;
    protected $returnLineItems;

    /**
     * The ID of the return for line item removal.
     */
    public function setReturnId($returnId): static
    {
        $this->returnId = $returnId;

        return $this;
    }

    /**
     * The return line items to remove from the return.
     */
    public function setReturnLineItems(array $returnLineItems): static
    {
        $this->returnLineItems = $returnLineItems;

        return $this;
    }
}
