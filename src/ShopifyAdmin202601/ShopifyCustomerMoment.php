<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;

/**
 * Represents a session preceding an order, often used for building a timeline of events leading to an order.
 */
interface ShopifyCustomerMoment
{
    
    /**
     * The date and time when the customer's session occurred.
     *
     * @return Carbon
     */
    public function getOccurredAt(): ?Carbon;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
