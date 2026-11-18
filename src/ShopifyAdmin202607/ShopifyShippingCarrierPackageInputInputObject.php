<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a carrier-defined package to use for the shipping label purchase.
 */
class ShopifyShippingCarrierPackageInputInputObject extends InputObject
{
    const REQUIRED = ["carrierCode", "carrierPackageCode"];

    protected $name;
    protected $carrierCode;
    protected $carrierPackageCode;

    /**
     * The carrier-defined display name for the package.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The code identifying the carrier that supplies the package. Examples include `usps`, `ups_shipping`, `dhl_express`, and `canada_post`.
     */
    public function setCarrierCode($carrierCode): static
    {
        $this->carrierCode = $carrierCode;

        return $this;
    }

    /**
     * The code identifying the carrier package type.
     */
    public function setCarrierPackageCode($carrierPackageCode): static
    {
        $this->carrierPackageCode = $carrierPackageCode;

        return $this;
    }
}
