<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

class ShopifyReturnRefundLineItemInputInputObject extends InputObject
{
    protected $returnLineItemId;
    protected $quantity;

    public function setReturnLineItemId($returnLineItemId)
    {
        $this->returnLineItemId = $returnLineItemId;

        return $this;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
}
