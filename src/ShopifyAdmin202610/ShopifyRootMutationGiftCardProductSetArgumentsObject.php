<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationGiftCardProductSetArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;
    protected $synchronous;
    protected $identifier;

    /**
     * The properties of the gift card product to create or update.
     */
    public function setInput(ShopifyGiftCardProductSetInputInputObject $shopifyGiftCardProductSetInputInputObject): static
    {
        $this->input = $shopifyGiftCardProductSetInputInputObject;

        return $this;
    }

    /**
     * Whether the mutation should be run synchronously or asynchronously.
     *
     * If `true`, the mutation will return the updated `product`.
     * If `false`, the mutation will return a `productSetOperation`.
     *
     * Defaults to `true`.
     */
    public function setSynchronous($synchronous): static
    {
        $this->synchronous = $synchronous;

        return $this;
    }

    /**
     * Specifies the identifier that will be used to lookup the resource.
     */
    public function setIdentifier(ShopifyProductSetIdentifiersInputObject $shopifyProductSetIdentifiersInputObject): static
    {
        $this->identifier = $shopifyProductSetIdentifiersInputObject;

        return $this;
    }
}
