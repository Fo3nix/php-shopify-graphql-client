<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootConsentPolicyArgumentsObject extends ArgumentsObject
{
    protected $id;
    protected $countryCode;
    protected $regionCode;
    protected $consentRequired;
    protected $dataSaleOptOutRequired;

    /**
     * Return the policy with the provided ID.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Return policies with the provided country code.
     */
    public function setCountryCode($shopifyPrivacyCountryCode): static
    {
        $this->countryCode = new RawObject($shopifyPrivacyCountryCode);

        return $this;
    }

    /**
     * Return policies with the provided region code.
     */
    public function setRegionCode($regionCode): static
    {
        $this->regionCode = $regionCode;

        return $this;
    }

    /**
     * Return policies where consent is required or not.
     */
    public function setConsentRequired($consentRequired): static
    {
        $this->consentRequired = $consentRequired;

        return $this;
    }

    /**
     * Return policies where data sale opt out is required or not.
     */
    public function setDataSaleOptOutRequired($dataSaleOptOutRequired): static
    {
        $this->dataSaleOptOutRequired = $dataSaleOptOutRequired;

        return $this;
    }
}
