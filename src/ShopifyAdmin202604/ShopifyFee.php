<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * A additional cost, charged by the merchant, on an order. Examples include return shipping fees and restocking fees.
 */
interface ShopifyFee
{
    
    /**
     * The unique ID for the Fee.
     *
     * @return string
     */
    public function getId(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
