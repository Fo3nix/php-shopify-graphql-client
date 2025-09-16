<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class WeightInputInputObject extends InputObject
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
