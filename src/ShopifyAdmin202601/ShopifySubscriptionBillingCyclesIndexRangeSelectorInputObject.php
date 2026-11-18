<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to select a subset of subscription billing cycles within an index range.
 */
class ShopifySubscriptionBillingCyclesIndexRangeSelectorInputObject extends InputObject
{
    const REQUIRED = ["startIndex", "endIndex"];

    protected $startIndex;
    protected $endIndex;

    /**
     * The start index for the range.
     */
    public function setStartIndex($startIndex): static
    {
        $this->startIndex = $startIndex;

        return $this;
    }

    /**
     * The end index for the range.
     */
    public function setEndIndex($endIndex): static
    {
        $this->endIndex = $endIndex;

        return $this;
    }
}
