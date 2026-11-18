<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerSetArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;
    protected $identifier;

    /**
     * The properties of the customer.
     */
    public function setInput(ShopifyCustomerSetInputInputObject $shopifyCustomerSetInputInputObject): static
    {
        $this->input = $shopifyCustomerSetInputInputObject;

        return $this;
    }

    /**
     * Specifies the identifier that will be used to lookup the resource.
     */
    public function setIdentifier(ShopifyCustomerSetIdentifiersInputObject $shopifyCustomerSetIdentifiersInputObject): static
    {
        $this->identifier = $shopifyCustomerSetIdentifiersInputObject;

        return $this;
    }
}
