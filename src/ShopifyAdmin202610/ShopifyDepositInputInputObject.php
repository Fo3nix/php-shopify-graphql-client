<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields configuring the deposit requirement.
 */
class ShopifyDepositInputInputObject extends InputObject
{
    const REQUIRED = ["percentage"];

    protected $percentage;

    /**
     * The percentage of the order total that should be paid as a deposit. Must be between 1 and 99, inclusive.
     */
    public function setPercentage($percentage): static
    {
        $this->percentage = $percentage;

        return $this;
    }
}
