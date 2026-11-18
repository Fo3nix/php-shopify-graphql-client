<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationRefundCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields that are used in the mutation for creating a refund.
     */
    public function setInput(ShopifyRefundInputInputObject $shopifyRefundInputInputObject): static
    {
        $this->input = $shopifyRefundInputInputObject;

        return $this;
    }
}
