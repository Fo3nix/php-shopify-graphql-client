<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

class ShopifyRestockingFeeInputInputObject extends InputObject
{
    protected $percentage;

    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }
}
