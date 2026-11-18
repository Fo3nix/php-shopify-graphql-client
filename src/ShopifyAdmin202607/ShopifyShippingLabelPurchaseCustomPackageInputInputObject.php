<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a custom package to use for the shipping label purchase.
 */
class ShopifyShippingLabelPurchaseCustomPackageInputInputObject extends InputObject
{
    const REQUIRED = ["weight", "dimensions"];

    protected $weight;
    protected $dimensions;
    protected $type;

    /**
     * The weight of the empty package.
     */
    public function setWeight(ShopifyWeightInputInputObject $shopifyWeightInputInputObject): static
    {
        $this->weight = $shopifyWeightInputInputObject;

        return $this;
    }

    /**
     * The outside dimensions of the shipping package.
     */
    public function setDimensions(ShopifyObjectDimensionsInputInputObject $shopifyObjectDimensionsInputInputObject): static
    {
        $this->dimensions = $shopifyObjectDimensionsInputInputObject;

        return $this;
    }

    /**
     * The package type. Defaults to `BOX`.
     */
    public function setType($shopifyShippingPackageType): static
    {
        $this->type = new RawObject($shopifyShippingPackageType);

        return $this;
    }
}
