<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

class ShopifyExchangeLineItemAppliedDiscountInputInputObject extends InputObject
{
    protected $description;
    protected $value;

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function setValue(ShopifyExchangeLineItemAppliedDiscountValueInputInputObject $shopifyExchangeLineItemAppliedDiscountValueInputInputObject)
    {
        $this->value = $shopifyExchangeLineItemAppliedDiscountValueInputInputObject;

        return $this;
    }
}
