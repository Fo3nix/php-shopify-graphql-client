<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCustomerByIdentifierArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["identifier"];

    protected $identifier;

    /**
     * The identifier of the customer.
     */
    public function setIdentifier(ShopifyCustomerIdentifierInputInputObject $shopifyCustomerIdentifierInputInputObject): static
    {
        $this->identifier = $shopifyCustomerIdentifierInputInputObject;

        return $this;
    }
}
