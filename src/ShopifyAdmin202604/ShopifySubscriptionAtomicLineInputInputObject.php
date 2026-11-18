<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for mapping a subscription line to a discount.
 */
class ShopifySubscriptionAtomicLineInputInputObject extends InputObject
{
    const REQUIRED = ["line"];

    protected $line;
    protected $discounts;

    /**
     * The new subscription line.
     */
    public function setLine(ShopifySubscriptionLineInputInputObject $shopifySubscriptionLineInputInputObject): static
    {
        $this->line = $shopifySubscriptionLineInputInputObject;

        return $this;
    }

    /**
     * The discount to be added to the subscription line.
     */
    public function setDiscounts(array $discounts): static
    {
        $this->discounts = $discounts;

        return $this;
    }
}
