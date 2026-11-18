<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for subscription lines used for contract calculation.
 * This is a oneOf input: one, and only one, field can be provided.
 */
class ShopifySubscriptionContractCalculationLineInputInputObject extends InputObject
{
    protected $productVariantLine;
    protected $customLine;
    protected $productVariantParentLine;

    /**
     * Input for a product variant line.
     */
    public function setProductVariantLine(ShopifySubscriptionContractCalculationProductVariantLineInputInputObject $shopifySubscriptionContractCalculationProductVariantLineInputInputObject): static
    {
        $this->productVariantLine = $shopifySubscriptionContractCalculationProductVariantLineInputInputObject;

        return $this;
    }

    /**
     * Input for a custom line.
     */
    public function setCustomLine(ShopifySubscriptionContractCalculationCustomLineInputInputObject $shopifySubscriptionContractCalculationCustomLineInputInputObject): static
    {
        $this->customLine = $shopifySubscriptionContractCalculationCustomLineInputInputObject;

        return $this;
    }

    /**
     * Input for a product variant bundle parent line.
     */
    public function setProductVariantParentLine(ShopifySubscriptionContractCalculationProductVariantParentLineInputInputObject $shopifySubscriptionContractCalculationProductVariantParentLineInputInputObject): static
    {
        $this->productVariantParentLine = $shopifySubscriptionContractCalculationProductVariantParentLineInputInputObject;

        return $this;
    }
}
