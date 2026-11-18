<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountRedeemCodeBulkAddArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["discountId", "codes"];

    protected $discountId;
    protected $codes;

    /**
     * The ID of the
     * [`DiscountCodeNode`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCodeNode#field-id)
     * object that the codes will be added to. For example, `gid://shopify/DiscountCodeNode/123`.
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
     * The list of codes to associate with the
     * [code discount](https://help.shopify.com/manual/discounts/discount-types#discount-codes).
     * Maximum: 250 codes.
     */
    public function setCodes(array $codes): static
    {
        $this->codes = $codes;

        return $this;
    }
}
