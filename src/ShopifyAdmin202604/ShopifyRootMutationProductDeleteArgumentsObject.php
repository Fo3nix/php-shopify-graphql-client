<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;
    protected $synchronous;

    /**
     * Specifies the product to delete by its ID.
     */
    public function setInput(ShopifyProductDeleteInputInputObject $shopifyProductDeleteInputInputObject): static
    {
        $this->input = $shopifyProductDeleteInputInputObject;

        return $this;
    }

    /**
     * Specifies whether or not to run the mutation synchronously.
     */
    public function setSynchronous($synchronous): static
    {
        $this->synchronous = $synchronous;

        return $this;
    }
}
