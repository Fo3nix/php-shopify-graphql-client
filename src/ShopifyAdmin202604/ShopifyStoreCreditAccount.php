<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyHasStoreCreditAccountsHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyHasStoreCreditAccounts;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyStoreCreditAccountTransactionConnection;

/**
 * A store credit account contains a monetary balance that can be redeemed at checkout for purchases in the shop.
 * The account is held in the specified currency and has an owner that cannot be transferred.
 *
 * The account balance is redeemable at checkout only when the owner is authenticated via [new customer accounts authentication](https://shopify.dev/docs/api/customer).
 */
class ShopifyStoreCreditAccount implements ShopifyNode
{
    protected $balance;
    protected $id;
    protected $owner;
    protected $transactions;

    
    /**
     * The current balance of the store credit account.
     *
     * @return ShopifyMoneyV2
     */
    public function getBalance(): ?ShopifyMoneyV2
    {
        return $this->balance;
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
     * The owner of the store credit account.
     *
     * @return ShopifyHasStoreCreditAccounts
     */
    public function getOwner(): ?ShopifyHasStoreCreditAccounts
    {
        return $this->owner;
    }

    
    /**
     * The transaction history of the store credit account.
     *
     * @return ShopifyStoreCreditAccountTransactionConnection
     */
    public function getTransactions(): ?ShopifyStoreCreditAccountTransactionConnection
    {
        return $this->transactions;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['balance']) && $data['balance'] !== null) {
                $instance->balance = ShopifyMoneyV2::fromArray($data['balance']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['owner']) && $data['owner'] !== null) {
                $instance->owner = ShopifyHasStoreCreditAccountsHydrator::fromArray($data['owner']);
            }
            if (isset($data['transactions']) && $data['transactions'] !== null) {
                $instance->transactions = ShopifyStoreCreditAccountTransactionConnection::fromArray($data['transactions']);
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
            if ($this->balance !== null) {
                $data['balance'] = $this->balance->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->owner !== null) {
                $data['owner'] = ShopifyHasStoreCreditAccountsHydrator::toArray($this->owner);
            }
            if ($this->transactions !== null) {
                $data['transactions'] = $this->transactions->asArray();
            }
            return $data;
        }
}
