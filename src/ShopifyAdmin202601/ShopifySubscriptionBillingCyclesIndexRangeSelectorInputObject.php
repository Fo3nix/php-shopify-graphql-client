<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

class ShopifySubscriptionBillingCyclesIndexRangeSelectorInputObject extends InputObject
{
    protected $startIndex;
    protected $endIndex;

    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;

        return $this;
    }

    public function setEndIndex($endIndex)
    {
        $this->endIndex = $endIndex;

        return $this;
    }
}
