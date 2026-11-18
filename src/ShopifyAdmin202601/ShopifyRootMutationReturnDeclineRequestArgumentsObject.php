<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationReturnDeclineRequestArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for declining a customer's return request.
     */
    public function setInput(ShopifyReturnDeclineRequestInputInputObject $shopifyReturnDeclineRequestInputInputObject): static
    {
        $this->input = $shopifyReturnDeclineRequestInputInputObject;

        return $this;
    }
}
