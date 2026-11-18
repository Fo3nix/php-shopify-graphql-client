<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Presents all Shopify Payments information related to an extended authorization.
 */
class ShopifyShopifyPaymentsExtendedAuthorizationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsExtendedAuthorization";

    /**
     * The time after which the extended authorization expires. After the expiry, the merchant is unable to capture the payment.
     */
    public function selectExtendedAuthorizationExpiresAt(): static
    {
        $this->selectField("extendedAuthorizationExpiresAt");

        return $this;
    }

    /**
     * The time after which capture will incur an additional fee.
     */
    public function selectStandardAuthorizationExpiresAt(): static
    {
        $this->selectField("standardAuthorizationExpiresAt");

        return $this;
    }
}
