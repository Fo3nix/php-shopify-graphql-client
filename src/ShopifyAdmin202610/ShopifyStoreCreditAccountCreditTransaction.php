<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStoreCreditAccount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStoreCreditAccountTransactionOriginHydrator;

/**
 * A credit transaction which increases the store credit account balance.
 */
class ShopifyStoreCreditAccountCreditTransaction implements ShopifyNode, ShopifyStoreCreditAccountTransaction
{
    protected $account;
    protected $amount;
    protected $balanceAfterTransaction;
    protected $createdAt;
    protected $event;
    protected $expiresAt;
    protected $id;
    protected $origin;
    protected $remainingAmount;

    
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
     * The event that caused the store credit account transaction.
     *
     * @return string A ShopifyStoreCreditSystemEventEnumObject value
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }

    
    /**
     * The time at which the transaction expires.
     * Debit transactions will always spend the soonest expiring credit first.
     *
     * @return Carbon
     */
    public function getExpiresAt(): ?Carbon
    {
        return $this->expiresAt;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
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
     * The remaining amount of the credit.
     * The remaining amount will decrease when a debit spends this credit. It may also increase if that debit is subsequently reverted.
     * In the event that the credit expires, the remaining amount will represent the amount that remained as the expiry occurred.
     *
     * @return ShopifyMoneyV2
     */
    public function getRemainingAmount(): ?ShopifyMoneyV2
    {
        return $this->remainingAmount;
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
            if (isset($data['event']) && $data['event'] !== null) {
                $instance->event = $data['event'];
            }
            if (isset($data['expiresAt']) && $data['expiresAt'] !== null) {
                $instance->expiresAt = new Carbon($data['expiresAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['origin']) && $data['origin'] !== null) {
                $instance->origin = ShopifyStoreCreditAccountTransactionOriginHydrator::fromArray($data['origin']);
            }
            if (isset($data['remainingAmount']) && $data['remainingAmount'] !== null) {
                $instance->remainingAmount = ShopifyMoneyV2::fromArray($data['remainingAmount']);
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
            if ($this->event !== null) {
                $data['event'] = $this->event;
            }
            if ($this->expiresAt !== null) {
                $data['expiresAt'] = $this->expiresAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->origin !== null) {
                $data['origin'] = ShopifyStoreCreditAccountTransactionOriginHydrator::toArray($this->origin);
            }
            if ($this->remainingAmount !== null) {
                $data['remainingAmount'] = $this->remainingAmount->asArray();
            }
            return $data;
        }
}
