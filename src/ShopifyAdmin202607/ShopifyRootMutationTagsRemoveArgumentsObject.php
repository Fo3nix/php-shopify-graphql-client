<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationTagsRemoveArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "tags"];

    protected $id;
    protected $tags;

    /**
     * The ID of the resource to remove tags from. Supported resources: [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order), [`DraftOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder), [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer), [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product), [`Article`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Article), and [`DiscountNode`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountNode).
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * A list of tags to remove from the resource in the form of an array of strings. Example value: `["tag1", "tag2", "tag3"]`.
     */
    public function setTags(array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }
}
