<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSellingPlanGroupCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;
    protected $resources;

    /**
     * The properties of the new Selling Plan Group.
     */
    public function setInput(ShopifySellingPlanGroupInputInputObject $shopifySellingPlanGroupInputInputObject): static
    {
        $this->input = $shopifySellingPlanGroupInputInputObject;

        return $this;
    }

    /**
     * The resources this Selling Plan Group should be applied to.
     */
    public function setResources(ShopifySellingPlanGroupResourceInputInputObject $shopifySellingPlanGroupResourceInputInputObject): static
    {
        $this->resources = $shopifySellingPlanGroupResourceInputInputObject;

        return $this;
    }
}
