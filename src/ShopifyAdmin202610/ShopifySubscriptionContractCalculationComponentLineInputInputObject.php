<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a single component of a parent line in the calculate API.
 * This is a oneOf input: one, and only one, field can be provided.
 */
class ShopifySubscriptionContractCalculationComponentLineInputInputObject extends InputObject
{
    protected $productVariantLine;

    /**
     * Input for a product variant component.
     */
    public function setProductVariantLine(ShopifySubscriptionContractCalculationProductVariantLineInputInputObject $shopifySubscriptionContractCalculationProductVariantLineInputInputObject): static
    {
        $this->productVariantLine = $shopifySubscriptionContractCalculationProductVariantLineInputInputObject;

        return $this;
    }
}
