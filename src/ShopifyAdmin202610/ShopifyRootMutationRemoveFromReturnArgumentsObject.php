<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationRemoveFromReturnArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["returnId"];

    protected $returnId;
    protected $returnLineItems;
    protected $exchangeLineItems;

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

    /**
     * The exchange line items to remove from the return.
     */
    public function setExchangeLineItems(array $exchangeLineItems): static
    {
        $this->exchangeLineItems = $exchangeLineItems;

        return $this;
    }
}
