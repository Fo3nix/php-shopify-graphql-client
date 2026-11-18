<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for the authorized transaction to capture and the total amount to capture from it.
 */
class ShopifyOrderCaptureInputInputObject extends InputObject
{
    const REQUIRED = ["id", "parentTransactionId", "amount"];

    protected $id;
    protected $parentTransactionId;
    protected $amount;
    protected $currency;
    protected $finalCapture;

    /**
     * The ID of the order to capture.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The ID of the authorized transaction to capture.
     */
    public function setParentTransactionId($parentTransactionId): static
    {
        $this->parentTransactionId = $parentTransactionId;

        return $this;
    }

    /**
     * The amount to capture. The capture amount can't be greater than the amount of the authorized transaction.
     */
    public function setAmount($amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * The currency (in ISO format) that's used to capture the order. This must be the presentment currency (the currency used by the customer) and is a required field for orders where the currency and presentment currency differ.
     */
    public function setCurrency($shopifyCurrencyCode): static
    {
        $this->currency = new RawObject($shopifyCurrencyCode);

        return $this;
    }

    /**
     * Indicates whether this is to be the final capture for the order transaction. Only applies to
     * Shopify Payments authorizations which are multi-capturable. If true, any uncaptured amount from the
     * authorization will be voided after the capture is completed. If false, the authorization will remain open
     * for future captures.
     *
     * For multi-capturable authorizations, this defaults to false if not provided. This field has no effect on
     * authorizations which aren't multi-capturable (can only be captured once), or on other types of
     * transactions.
     */
    public function setFinalCapture($finalCapture): static
    {
        $this->finalCapture = $finalCapture;

        return $this;
    }
}
