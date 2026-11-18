<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to select SubscriptionBillingCycle by either date or index. Both past and future billing cycles can be selected.
 */
class ShopifySubscriptionBillingCycleSelectorInputObject extends InputObject
{
    protected $index;
    protected $date;

    /**
     * Returns a billing cycle by index.
     */
    public function setIndex($index): static
    {
        $this->index = $index;

        return $this;
    }

    /**
     * Returns a billing cycle by date.
     */
    public function setDate($date): static
    {
        $this->date = $date;

        return $this;
    }
}
