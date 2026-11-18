<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for selecting a preferred shipping rate by carrier and service codes.
 */
class ShopifyPreferredRateSelectionInputInputObject extends InputObject
{
    const REQUIRED = ["carrierCode", "serviceCode"];

    protected $carrierCode;
    protected $serviceCode;

    /**
     * The code identifying the carrier for the preferred rate. Examples include `usps`, `ups_shipping`, `dhl_express`, and `canada_post`.
     */
    public function setCarrierCode($carrierCode): static
    {
        $this->carrierCode = $carrierCode;

        return $this;
    }

    /**
     * The carrier-defined service code for the preferred rate.
     */
    public function setServiceCode($serviceCode): static
    {
        $this->serviceCode = $serviceCode;

        return $this;
    }
}
