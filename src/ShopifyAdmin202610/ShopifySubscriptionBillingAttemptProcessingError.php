<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * An error that prevented a billing attempt.
 */
interface ShopifySubscriptionBillingAttemptProcessingError
{
    
    /**
     * The code for the error.
     *
     * @return string A ShopifySubscriptionBillingAttemptErrorCodeEnumObject value
     */
    public function getCode(): ?string;

    
    /**
     * An explanation of the error.
     *
     * @return string
     */
    public function getMessage(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
