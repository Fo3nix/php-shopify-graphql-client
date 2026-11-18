<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the line item changes in a requested order edit, grouped by the type of change.
 */
class ShopifyRequestedOrderEditLineItemsInputInputObject extends InputObject
{
    const REQUIRED = ["removals"];

    protected $removals;

    /**
     * The line items to request removal for.
     */
    public function setRemovals(array $removals): static
    {
        $this->removals = $removals;

        return $this;
    }
}
