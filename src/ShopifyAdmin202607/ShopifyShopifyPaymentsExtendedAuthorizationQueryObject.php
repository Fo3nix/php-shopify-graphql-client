<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsExtendedAuthorizationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsExtendedAuthorization";

    public function selectExtendedAuthorizationExpiresAt()
    {
        $this->selectField("extendedAuthorizationExpiresAt");

        return $this;
    }

    public function selectStandardAuthorizationExpiresAt()
    {
        $this->selectField("standardAuthorizationExpiresAt");

        return $this;
    }
}
