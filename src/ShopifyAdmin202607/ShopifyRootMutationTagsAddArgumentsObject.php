<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationTagsAddArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "tags"];

    protected $id;
    protected $tags;

    /**
     * The ID of a resource to add tags to. Supported resources: [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order), [`DraftOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder), [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer), [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product), [`Article`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Article), and [`DiscountNode`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountNode).
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * A list of tags to add to the resource. Can be an array of strings or a single string composed of a comma-separated list of values. Example values: `["tag1", "tag2", "tag3"]`, `"tag1, tag2, tag3"`.
     */
    public function setTags(array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }
}
