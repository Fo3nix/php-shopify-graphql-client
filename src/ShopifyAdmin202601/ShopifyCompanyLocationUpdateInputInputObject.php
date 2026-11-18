<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for company location when creating or updating a company location.
 */
class ShopifyCompanyLocationUpdateInputInputObject extends InputObject
{
    protected $name;
    protected $phone;
    protected $locale;
    protected $externalId;
    protected $note;
    protected $buyerExperienceConfiguration;

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
}
