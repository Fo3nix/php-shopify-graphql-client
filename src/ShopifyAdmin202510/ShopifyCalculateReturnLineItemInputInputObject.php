<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\InputObject;

class ShopifyCalculateReturnLineItemInputInputObject extends InputObject
{
    protected $fulfillmentLineItemId;
    protected $restockingFee;
    protected $quantity;

    public function setFulfillmentLineItemId($fulfillmentLineItemId)
    {
        $this->fulfillmentLineItemId = $fulfillmentLineItemId;

        return $this;
    }

    public function setRestockingFee(ShopifyRestockingFeeInputInputObject $shopifyRestockingFeeInputInputObject)
    {
        $this->restockingFee = $shopifyRestockingFeeInputInputObject;

        return $this;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
}
