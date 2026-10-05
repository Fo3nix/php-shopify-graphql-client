<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

class ShopifySubscriptionBillingCycleSelectorInputObject extends InputObject
{
    protected $index;
    protected $date;

    public function setIndex($index)
    {
        $this->index = $index;

        return $this;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
}
