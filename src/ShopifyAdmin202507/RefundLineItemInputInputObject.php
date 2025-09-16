<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class RefundLineItemInputInputObject extends InputObject
{
    protected $lineItemId;
    protected $quantity;
    protected $restockType;
    protected $locationId;

    public function setLineItemId($lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function setRestockType($restockType)
    {
        $this->restockType = $restockType;

        return $this;
    }

    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }
}
