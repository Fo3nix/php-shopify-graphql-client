<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountCodeRedeemCodeBulkDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["discountId"];

    protected $discountId;
    protected $search;
    protected $savedSearchId;
    protected $ids;

    /**
     * The ID of the
     * [`DiscountCodeNode`](https://help.shopify.com/docs/api/admin-graphql/latest/objects/DiscountCodeNode#field-id)
     * object that the codes will be removed from. For example, `gid://shopify/DiscountCodeNode/123`.
     * You can use the
     * [`codeDiscountNodes` query](https://shopify.dev/docs/api/admin-graphql/latest/queries/codeDiscountNodes)
     * to retrieve the ID.
     */
    public function setDiscountId($discountId): static
    {
        $this->discountId = $discountId;

        return $this;
    }

    /**
     * A filter made up of terms, connectives, modifiers, and comparators that you can use to
     * search for code discounts. You can apply one or more filters to a query. Learn more about
     * [Shopify API search syntax](https://shopify.dev/docs/api/usage/search-syntax).
     *
     * For a list of accepted values for the `search` field, refer to the
     * [`query` argument on the `codeDiscountNodes` query](https://shopify.dev/docs/api/admin-graphql/latest/queries/codeDiscountNodes#argument-query).
     */
    public function setSearch($search): static
    {
        $this->search = $search;

        return $this;
    }

    /**
     * The ID of a
     * [saved search](https://shopify.dev/docs/api/admin-graphql/latest/objects/savedsearch#field-id).
     */
    public function setSavedSearchId($savedSearchId): static
    {
        $this->savedSearchId = $savedSearchId;

        return $this;
    }

    /**
     * The IDs of the
     * [`DiscountRedeemCode`](https://shopify.dev/docs/api/admin-graphql/latest/objects/discountredeemcode#field-id)
     * objects to delete.
     * For example, `gid://shopify/DiscountRedeemCode/123`.
     * You can use the
     * [`codeDiscountNodes` query](https://shopify.dev/docs/api/admin-graphql/latest/queries/codeDiscountNodes)
     * to retrieve the ID.
     */
    public function setIds(array $ids): static
    {
        $this->ids = $ids;

        return $this;
    }
}
