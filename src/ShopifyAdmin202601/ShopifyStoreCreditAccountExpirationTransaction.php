<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyStoreCreditAccount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyStoreCreditAccountCreditTransaction;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyStoreCreditAccountTransactionOriginHydrator;

/**
 * An expiration transaction which decreases the store credit account balance.
 * Expiration transactions are created automatically when a [store credit account credit transaction](https://shopify.dev/api/admin-graphql/latest/objects/StoreCreditAccountCreditTransaction) expires.
 *
 * The amount subtracted from the balance is equal to the remaining amount of the credit transaction.
 */
class ShopifyStoreCreditAccountExpirationTransaction implements ShopifyStoreCreditAccountTransaction
{
    protected $account;
    protected $amount;
    protected $balanceAfterTransaction;
    protected $createdAt;
    protected $creditTransaction;
    protected $event;
    protected $origin;

    
    /**
     * The store credit account that the transaction belongs to.
     *
     * @return ShopifyStoreCreditAccount
     */
    public function getAccount(): ?ShopifyStoreCreditAccount
    {
        return $this->account;
    }

    
    /**
     * The amount of the transaction.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmount(): ?ShopifyMoneyV2
    {
        return $this->amount;
    }

    
    /**
     * The balance of the account after the transaction.
     *
     * @return ShopifyMoneyV2
     */
    public function getBalanceAfterTransaction(): ?ShopifyMoneyV2
    {
        return $this->balanceAfterTransaction;
    }

    
    /**
     * The date and time when the transaction was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The credit transaction which expired.
     *
     * @return ShopifyStoreCreditAccountCreditTransaction
     */
    public function getCreditTransaction(): ?ShopifyStoreCreditAccountCreditTransaction
    {
        return $this->creditTransaction;
    }

    
    /**
     * The event that caused the store credit account transaction.
     *
     * @return string A ShopifyStoreCreditSystemEventEnumObject value
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }

    
    /**
     * The origin of the store credit account transaction.
     *
     * @return ShopifyOrderTransaction
     */
    public function getOrigin(): ?ShopifyOrderTransaction
    {
        return $this->origin;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['account']) && $data['account'] !== null) {
                $instance->account = ShopifyStoreCreditAccount::fromArray($data['account']);
            }
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = ShopifyMoneyV2::fromArray($data['amount']);
            }
            if (isset($data['balanceAfterTransaction']) && $data['balanceAfterTransaction'] !== null) {
                $instance->balanceAfterTransaction = ShopifyMoneyV2::fromArray($data['balanceAfterTransaction']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['creditTransaction']) && $data['creditTransaction'] !== null) {
                $instance->creditTransaction = ShopifyStoreCreditAccountCreditTransaction::fromArray($data['creditTransaction']);
            }
            if (isset($data['event']) && $data['event'] !== null) {
                $instance->event = $data['event'];
            }
            if (isset($data['origin']) && $data['origin'] !== null) {
                $instance->origin = ShopifyStoreCreditAccountTransactionOriginHydrator::fromArray($data['origin']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->account !== null) {
                $data['account'] = $this->account->asArray();
            }
            if ($this->amount !== null) {
                $data['amount'] = $this->amount->asArray();
            }
            if ($this->balanceAfterTransaction !== null) {
                $data['balanceAfterTransaction'] = $this->balanceAfterTransaction->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->creditTransaction !== null) {
                $data['creditTransaction'] = $this->creditTransaction->asArray();
            }
            if ($this->event !== null) {
                $data['event'] = $this->event;
            }
            if ($this->origin !== null) {
                $data['origin'] = ShopifyStoreCreditAccountTransactionOriginHydrator::toArray($this->origin);
            }
            return $data;
        }
}
