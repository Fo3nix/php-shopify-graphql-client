<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Presents all Shopify Payments specific information related to an order refund.
 */
class ShopifyShopifyPaymentsRefundSetQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsRefundSet";

    /**
     * The acquirer reference number (ARN) code generated for Visa/Mastercard transactions.
     */
    public function selectAcquirerReferenceNumber(): static
    {
        $this->selectField("acquirerReferenceNumber");

        return $this;
    }
}
