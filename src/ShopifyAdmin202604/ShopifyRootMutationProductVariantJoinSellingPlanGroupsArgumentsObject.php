<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductVariantJoinSellingPlanGroupsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "sellingPlanGroupIds"];

    protected $id;
    protected $sellingPlanGroupIds;

    /**
     * The ID of the product variant.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The IDs of the selling plan groups to add.
     */
    public function setSellingPlanGroupIds(array $sellingPlanGroupIds): static
    {
        $this->sellingPlanGroupIds = $sellingPlanGroupIds;

        return $this;
    }
}
