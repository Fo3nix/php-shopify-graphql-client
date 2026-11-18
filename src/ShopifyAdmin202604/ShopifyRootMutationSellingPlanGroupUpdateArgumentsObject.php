<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSellingPlanGroupUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The Selling Plan Group to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The properties of the Selling Plan Group to update.
     */
    public function setInput(ShopifySellingPlanGroupInputInputObject $shopifySellingPlanGroupInputInputObject): static
    {
        $this->input = $shopifySellingPlanGroupInputInputObject;

        return $this;
    }
}
