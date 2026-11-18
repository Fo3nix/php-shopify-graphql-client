<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;

/**
 * Services and features purchased once by the store.
 */
interface ShopifyAppPurchase
{
    
    /**
     * The date and time when the app purchase occurred.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon;

    
    /**
     * The name of the app purchase.
     *
     * @return string
     */
    public function getName(): ?string;

    
    /**
     * The amount to be charged to the store for the app purchase.
     *
     * @return ShopifyMoneyV2
     */
    public function getPrice(): ?ShopifyMoneyV2;

    
    /**
     * The status of the app purchase.
     *
     * @return string A ShopifyAppPurchaseStatusEnumObject value
     */
    public function getStatus(): ?string;

    
    /**
     * Whether the app purchase is a test transaction.
     *
     * @return bool
     */
    public function getTest(): ?bool;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
