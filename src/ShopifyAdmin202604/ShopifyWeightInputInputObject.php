<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

class ShopifyWeightInputInputObject extends InputObject
{
    protected $value;
    protected $unit;

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }
}
