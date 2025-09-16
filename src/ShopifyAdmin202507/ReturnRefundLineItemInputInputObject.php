<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class ReturnRefundLineItemInputInputObject extends InputObject
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
