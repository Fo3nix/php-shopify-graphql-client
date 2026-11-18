<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a restocking fee.
 */
class ShopifyRestockingFeeInputInputObject extends InputObject
{
    const REQUIRED = ["percentage"];

    protected $percentage;

    /**
     * The value of the fee as a percentage.
     */
    public function setPercentage($percentage): static
    {
        $this->percentage = $percentage;

        return $this;
    }
}
