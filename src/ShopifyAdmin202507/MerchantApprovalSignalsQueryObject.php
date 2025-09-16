<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MerchantApprovalSignalsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MerchantApprovalSignals";

    public function selectIdentityVerified()
    {
        $this->selectField("identityVerified");

        return $this;
    }

    public function selectVerifiedByShopify()
    {
        $this->selectField("verifiedByShopify");

        return $this;
    }

    public function selectVerifiedByShopifyTier()
    {
        $this->selectField("verifiedByShopifyTier");

        return $this;
    }
}
