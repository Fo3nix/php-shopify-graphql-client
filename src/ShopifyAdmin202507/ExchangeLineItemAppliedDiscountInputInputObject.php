<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class ExchangeLineItemAppliedDiscountInputInputObject extends InputObject
{
    protected $description;
    protected $value;

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function setValue(ExchangeLineItemAppliedDiscountValueInputInputObject $exchangeLineItemAppliedDiscountValueInputInputObject)
    {
        $this->value = $exchangeLineItemAppliedDiscountValueInputInputObject;

        return $this;
    }
}
