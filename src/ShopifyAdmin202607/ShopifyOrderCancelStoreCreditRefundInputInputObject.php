<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to refund to store credit.
 */
class ShopifyOrderCancelStoreCreditRefundInputInputObject extends InputObject
{
    protected $expiresAt;

    /**
     * The expiration date of the store credit.
     */
    public function setExpiresAt($expiresAt): static
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }
}
