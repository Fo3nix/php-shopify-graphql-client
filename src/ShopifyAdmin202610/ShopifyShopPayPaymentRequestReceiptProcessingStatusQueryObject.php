<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The processing status of a Shop Pay payment request.
 * Represents the different states a payment request can be in during its lifecycle,
 * from initial creation through to completion or failure.
 */
class ShopifyShopPayPaymentRequestReceiptProcessingStatusQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestReceiptProcessingStatus";

    /**
     * A standardized error code, independent of the payment provider.
     */
    public function selectErrorCode(): static
    {
        $this->selectField("errorCode");

        return $this;
    }

    /**
     * The message of the payment request receipt.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }

    /**
     * The state of the payment request receipt.
     */
    public function selectState(): static
    {
        $this->selectField("state");

        return $this;
    }
}
