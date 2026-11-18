<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyStoreCreditAccountConnection;

/**
 * Represents information about the store credit accounts associated to the specified owner.
 */
interface ShopifyHasStoreCreditAccounts
{
    
    /**
     * Returns a list of store credit accounts that belong to the owner resource.
     * A store credit account owner can hold multiple accounts each with a different currency.
     *
     * @return ShopifyStoreCreditAccountConnection
     */
    public function getStoreCreditAccounts(): ?ShopifyStoreCreditAccountConnection;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
