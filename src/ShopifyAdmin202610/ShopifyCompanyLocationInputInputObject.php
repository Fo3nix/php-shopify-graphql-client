<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for company location when creating or updating a company location.
 */
class ShopifyCompanyLocationInputInputObject extends InputObject
{
    protected $name;
    protected $phone;
    protected $locale;
    protected $externalId;
    protected $note;
    protected $buyerExperienceConfiguration;
    protected $billingAddress;
    protected $shippingAddress;
    protected $billingSameAsShipping;
    protected $taxRegistrationId;
    protected $taxExemptions;
    protected $taxExempt;

    /**
     * The name of the company location.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The phone number of the company location.
     */
    public function setPhone($phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * The preferred locale of the company location.
     */
    public function setLocale($locale): static
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * A unique externally-supplied ID for the company location.
     */
    public function setExternalId($externalId): static
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * A note about the company location.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * The configuration for the buyer's checkout at the company location.
     */
    public function setBuyerExperienceConfiguration(ShopifyBuyerExperienceConfigurationInputInputObject $shopifyBuyerExperienceConfigurationInputInputObject): static
    {
        $this->buyerExperienceConfiguration = $shopifyBuyerExperienceConfigurationInputInputObject;

        return $this;
    }

    /**
     * The input fields to create or update the billing address for a company location.
     */
    public function setBillingAddress(ShopifyCompanyAddressInputInputObject $shopifyCompanyAddressInputInputObject): static
    {
        $this->billingAddress = $shopifyCompanyAddressInputInputObject;

        return $this;
    }

    /**
     * The input fields to create or update the shipping address for a company location.
     */
    public function setShippingAddress(ShopifyCompanyAddressInputInputObject $shopifyCompanyAddressInputInputObject): static
    {
        $this->shippingAddress = $shopifyCompanyAddressInputInputObject;

        return $this;
    }

    /**
     * Whether the billing address is the same as the shipping address. If the value is true, then the input for `billingAddress` is ignored.
     */
    public function setBillingSameAsShipping($billingSameAsShipping): static
    {
        $this->billingSameAsShipping = $billingSameAsShipping;

        return $this;
    }

    /**
     * The tax registration ID of the company location.
     */
    public function setTaxRegistrationId($taxRegistrationId): static
    {
        $this->taxRegistrationId = $taxRegistrationId;

        return $this;
    }

    /**
     * The list of tax exemptions to apply to the company location.
     */
    public function setTaxExemptions(array $taxExemptions): static
    {
        $this->taxExemptions = array_map(function ($value) {
            return new RawObject($value);
        }, $taxExemptions);

        return $this;
    }

    /**
     * Whether the location is exempt from taxes.
     */
    public function setTaxExempt($taxExempt): static
    {
        $this->taxExempt = $taxExempt;

        return $this;
    }
}
