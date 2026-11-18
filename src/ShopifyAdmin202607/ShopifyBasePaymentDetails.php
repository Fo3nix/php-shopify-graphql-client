<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Generic payment details that are related to a transaction.
 */
interface ShopifyBasePaymentDetails
{
    
    /**
     * The name of payment method used by the buyer.
     *
     * @return string
     */
    public function getPaymentMethodName(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
