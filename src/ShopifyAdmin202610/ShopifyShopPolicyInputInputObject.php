<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to update a policy.
 */
class ShopifyShopPolicyInputInputObject extends InputObject
{
    const REQUIRED = ["type", "body"];

    protected $type;
    protected $body;

    /**
     * The shop policy type.
     */
    public function setType($shopifyShopPolicyType): static
    {
        $this->type = new RawObject($shopifyShopPolicyType);

        return $this;
    }

    /**
     * Policy text, maximum size of 512kb.
     */
    public function setBody($body): static
    {
        $this->body = $body;

        return $this;
    }
}
