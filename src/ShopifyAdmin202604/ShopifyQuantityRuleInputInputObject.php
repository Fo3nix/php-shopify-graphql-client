<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the per-order quantity rule to be applied on the product variant.
 */
class ShopifyQuantityRuleInputInputObject extends InputObject
{
    const REQUIRED = ["increment", "minimum", "variantId"];

    protected $increment;
    protected $maximum;
    protected $minimum;
    protected $variantId;

    /**
     * The quantity increment.
     */
    public function setIncrement($increment): static
    {
        $this->increment = $increment;

        return $this;
    }

    /**
     * The maximum quantity.
     */
    public function setMaximum($maximum): static
    {
        $this->maximum = $maximum;

        return $this;
    }

    /**
     * The minimum quantity.
     */
    public function setMinimum($minimum): static
    {
        $this->minimum = $minimum;

        return $this;
    }

    /**
     * Product variant on which to apply the quantity rule.
     */
    public function setVariantId($variantId): static
    {
        $this->variantId = $variantId;

        return $this;
    }
}
