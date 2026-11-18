<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the subscription lines the discount applies on.
 */
class ShopifySubscriptionManualDiscountEntitledLinesInputInputObject extends InputObject
{
    protected $all;
    protected $lines;

    /**
     * Specify whether the subscription discount will apply on all subscription lines.
     */
    public function setAll($all): static
    {
        $this->all = $all;

        return $this;
    }

    /**
     * The ID of the lines to add to or remove from the subscription discount.
     */
    public function setLines(ShopifySubscriptionManualDiscountLinesInputInputObject $shopifySubscriptionManualDiscountLinesInputInputObject): static
    {
        $this->lines = $shopifySubscriptionManualDiscountLinesInputInputObject;

        return $this;
    }
}
