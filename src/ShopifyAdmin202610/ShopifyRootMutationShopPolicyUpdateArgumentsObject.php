<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationShopPolicyUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["shopPolicy"];

    protected $shopPolicy;

    /**
     * The properties to use when updating the shop policy.
     */
    public function setShopPolicy(ShopifyShopPolicyInputInputObject $shopifyShopPolicyInputInputObject): static
    {
        $this->shopPolicy = $shopifyShopPolicyInputInputObject;

        return $this;
    }
}
