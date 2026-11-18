<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerSegmentMembersQueryCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields to create a customer segment members query.
     */
    public function setInput(ShopifyCustomerSegmentMembersQueryInputInputObject $shopifyCustomerSegmentMembersQueryInputInputObject): static
    {
        $this->input = $shopifyCustomerSegmentMembersQueryInputInputObject;

        return $this;
    }
}
