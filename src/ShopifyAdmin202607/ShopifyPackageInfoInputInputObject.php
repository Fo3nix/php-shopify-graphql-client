<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields that describe package information for the shipping label purchase. Exactly one of `customPackage` or `carrierPackage` must be provided.
 */
class ShopifyPackageInfoInputInputObject extends InputObject
{
    protected $customPackage;
    protected $carrierPackage;

    /**
     * A package with custom dimensions and empty-package weight. Mutually exclusive with `carrierPackage`.
     */
    public function setCustomPackage(ShopifyShippingLabelPurchaseCustomPackageInputInputObject $shopifyShippingLabelPurchaseCustomPackageInputInputObject): static
    {
        $this->customPackage = $shopifyShippingLabelPurchaseCustomPackageInputInputObject;

        return $this;
    }

    /**
     * A standard package provided by the carrier. Mutually exclusive with `customPackage`.
     */
    public function setCarrierPackage(ShopifyShippingCarrierPackageInputInputObject $shopifyShippingCarrierPackageInputInputObject): static
    {
        $this->carrierPackage = $shopifyShippingCarrierPackageInputInputObject;

        return $this;
    }
}
