<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyContactSendWelcomeEmailArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyContactId"];

    protected $companyContactId;
    protected $email;

    /**
     * The ID of the company contact to send welcome email to.
     */
    public function setCompanyContactId($companyContactId): static
    {
        $this->companyContactId = $companyContactId;

        return $this;
    }

    /**
     * The welcome email fields.
     */
    public function setEmail(ShopifyEmailInputInputObject $shopifyEmailInputInputObject): static
    {
        $this->email = $shopifyEmailInputInputObject;

        return $this;
    }
}
