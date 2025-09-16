<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class RestockingFeeInputInputObject extends InputObject
{
    protected $percentage;

    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }
}
