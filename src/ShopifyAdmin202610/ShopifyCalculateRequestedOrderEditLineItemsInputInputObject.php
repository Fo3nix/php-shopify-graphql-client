<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

class ShopifyCalculateRequestedOrderEditLineItemsInputInputObject extends InputObject
{
    protected $removals;

    public function setRemovals(array $removals)
    {
        $this->removals = $removals;

        return $this;
    }
}
