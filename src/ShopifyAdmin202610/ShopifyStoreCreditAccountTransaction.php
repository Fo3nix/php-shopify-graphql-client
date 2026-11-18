<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStoreCreditAccount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStoreCreditAccountTransactionOriginHydrator;

/**
 * Interface for a store credit account transaction.
 */
interface ShopifyStoreCreditAccountTransaction
{
    
    /**
     * The store credit account that the transaction belongs to.
     *
     * @return ShopifyStoreCreditAccount
     */
    public function getAccount(): ?ShopifyStoreCreditAccount;

    
    /**
     * The amount of the transaction.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmount(): ?ShopifyMoneyV2;

    
    /**
     * The balance of the account after the transaction.
     *
     * @return ShopifyMoneyV2
     */
    public function getBalanceAfterTransaction(): ?ShopifyMoneyV2;

    
    /**
     * The date and time when the transaction was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon;

    
    /**
     * The event that caused the store credit account transaction.
     *
     * @return string A ShopifyStoreCreditSystemEventEnumObject value
     */
    public function getEvent(): ?string;

    
    /**
     * The origin of the store credit account transaction.
     *
     * @return ShopifyOrderTransaction
     */
    public function getOrigin(): ?ShopifyOrderTransaction;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
