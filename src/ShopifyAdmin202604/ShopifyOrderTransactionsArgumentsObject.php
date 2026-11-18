<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyOrderTransactionsArgumentsObject extends ArgumentsObject
{
    protected $first;
    protected $capturable;
    protected $manuallyResolvable;

    /**
     * Truncate the array result to this size.
     */
    public function setFirst($first): static
    {
        $this->first = $first;

        return $this;
    }

    /**
     * Filter transactions by whether they are capturable.
     */
    public function setCapturable($capturable): static
    {
        $this->capturable = $capturable;

        return $this;
    }

    /**
     * Filter transactions by whether they can be resolved manually.
     * For example, fully captured or voided transactions aren't manually resolvable.
     */
    public function setManuallyResolvable($manuallyResolvable): static
    {
        $this->manuallyResolvable = $manuallyResolvable;

        return $this;
    }
}
