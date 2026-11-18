<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for company attributes when creating or updating a company.
 */
class ShopifyCompanyInputInputObject extends InputObject
{
    protected $name;
    protected $note;
    protected $externalId;
    protected $customerSince;

    /**
     * The name of the company.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * A note about the company.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * A unique externally-supplied ID for the company.
     */
    public function setExternalId($externalId): static
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at
     *           which the company became the customer.
     */
    public function setCustomerSince($customerSince): static
    {
        $this->customerSince = $customerSince;

        return $this;
    }
}
