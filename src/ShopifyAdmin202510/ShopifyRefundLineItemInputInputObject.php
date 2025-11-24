<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\InputObject;

class ShopifyRefundLineItemInputInputObject extends InputObject
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
