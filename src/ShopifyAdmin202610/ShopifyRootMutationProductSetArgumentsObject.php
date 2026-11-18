<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductSetArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;
    protected $synchronous;
    protected $identifier;

    /**
     * The properties of the newly created or updated product.
     */
    public function setInput(ShopifyProductSetInputInputObject $shopifyProductSetInputInputObject): static
    {
        $this->input = $shopifyProductSetInputInputObject;

        return $this;
    }

    /**
     * Whether the mutation should be run synchronously or asynchronously.
     *
     * If `true`, the mutation will return the updated `product`.
     *
     * If `false`, the mutation will return a `productSetOperation`.
     *
     * Defaults to `true`.
     *
     * Setting `synchronous: false` may be desirable depending on the input complexity/size, and should be used if you are experiencing timeouts.
     *
     * **Note**: When run in the context of a
     * [bulk operation](https://shopify.dev/api/usage/bulk-operations/imports), the mutation will
     * always run synchronously and this argument will be ignored.
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
