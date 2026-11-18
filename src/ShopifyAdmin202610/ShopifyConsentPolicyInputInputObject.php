<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a consent policy to be updated or created.
 */
class ShopifyConsentPolicyInputInputObject extends InputObject
{
    protected $countryCode;
    protected $regionCode;
    protected $consentRequired;
    protected $dataSaleOptOutRequired;

    /**
     * The `ISO 3166` country code for which the policy applies.
     */
    public function setCountryCode($shopifyPrivacyCountryCode): static
    {
        $this->countryCode = new RawObject($shopifyPrivacyCountryCode);

        return $this;
    }

    /**
     * The `ISO 3166` region code for which the policy applies.
     */
    public function setRegionCode($regionCode): static
    {
        $this->regionCode = $regionCode;

        return $this;
    }

    /**
     * Whether consent is required for the region.
     */
    public function setConsentRequired($consentRequired): static
    {
        $this->consentRequired = $consentRequired;

        return $this;
    }

    /**
     * Whether data sale opt-out is required for the region.
     */
    public function setDataSaleOptOutRequired($dataSaleOptOutRequired): static
    {
        $this->dataSaleOptOutRequired = $dataSaleOptOutRequired;

        return $this;
    }
}
