<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyAssignCustomerAsContactArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyId", "customerId"];

    protected $companyId;
    protected $customerId;

    /**
     * The ID of the company to assign the contact to.
     */
    public function setCompanyId($companyId): static
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * The ID of the customer to assign as the contact.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }
}
