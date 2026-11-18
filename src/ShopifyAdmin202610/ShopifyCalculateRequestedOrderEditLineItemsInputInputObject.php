<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the line item changes in an edit calculation, grouped by the type of change.
 */
class ShopifyCalculateRequestedOrderEditLineItemsInputInputObject extends InputObject
{
    const REQUIRED = ["removals"];

    protected $removals;

    /**
     * The line items to be removed in the edit calculation.
     */
    public function setRemovals(array $removals): static
    {
        $this->removals = $removals;

        return $this;
    }
}
