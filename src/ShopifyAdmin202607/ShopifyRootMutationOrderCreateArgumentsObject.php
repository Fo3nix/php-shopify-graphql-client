<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["order"];

    protected $order;
    protected $options;

    /**
     * The attributes of the new order.
     */
    public function setOrder(ShopifyOrderCreateOrderInputInputObject $shopifyOrderCreateOrderInputInputObject): static
    {
        $this->order = $shopifyOrderCreateOrderInputInputObject;

        return $this;
    }

    /**
     * The strategies for updating inventory and whether to send shipping and order confirmations to customers.
     */
    public function setOptions(ShopifyOrderCreateOptionsInputInputObject $shopifyOrderCreateOptionsInputInputObject): static
    {
        $this->options = $shopifyOrderCreateOptionsInputInputObject;

        return $this;
    }
}
