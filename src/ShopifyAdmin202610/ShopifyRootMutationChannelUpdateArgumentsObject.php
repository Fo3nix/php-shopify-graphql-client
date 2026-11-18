<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationChannelUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel) to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields for updating the channel.
     */
    public function setInput(ShopifyChannelUpdateInputInputObject $shopifyChannelUpdateInputInputObject): static
    {
        $this->input = $shopifyChannelUpdateInputInputObject;

        return $this;
    }
}
