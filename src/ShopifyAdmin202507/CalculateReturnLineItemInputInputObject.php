<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class CalculateReturnLineItemInputInputObject extends InputObject
{
    protected $fulfillmentLineItemId;
    protected $restockingFee;
    protected $quantity;

    public function setFulfillmentLineItemId($fulfillmentLineItemId)
    {
        $this->fulfillmentLineItemId = $fulfillmentLineItemId;

        return $this;
    }

    public function setRestockingFee(RestockingFeeInputInputObject $restockingFeeInputInputObject)
    {
        $this->restockingFee = $restockingFeeInputInputObject;

        return $this;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
}
