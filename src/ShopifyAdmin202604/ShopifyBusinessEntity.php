<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyBusinessEntityAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopifyPaymentsAccount;

/**
 * A legal entity through which a merchant operates. Each business entity contains its own [`BusinessEntityAddress`](https://shopify.dev/docs/api/admin-graphql/latest/objects/BusinessEntityAddress), company information, and can be associated with its own [`ShopifyPaymentsAccount`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsAccount). [`Market`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Market) objects can be assigned to a business entity to determine payment processing and [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) attribution.
 *
 * Every shop must have one primary business entity. Additional entities enable international operations by establishing legal presence in multiple countries.
 *
 * Learn more about [managing multiple legal entities](https://shopify.dev/docs/apps/build/markets/multiple-entities).
 */
class ShopifyBusinessEntity implements ShopifyNode
{
    protected $address;
    protected $archived;
    protected $companyName;
    protected $displayName;
    protected $id;
    protected $primary;
    protected $shopifyPaymentsAccount;

    
    /**
     * The address of the merchant's Business Entity.
     *
     * @return ShopifyBusinessEntityAddress
     */
    public function getAddress(): ?ShopifyBusinessEntityAddress
    {
        return $this->address;
    }

    
    /**
     * Whether the Business Entity is archived from the shop.
     *
     * @return bool
     */
    public function getArchived(): ?bool
    {
        return $this->archived;
    }

    
    /**
     * The name of the company associated with the merchant's Business Entity.
     *
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    
    /**
     * The display name of the merchant's Business Entity.
     *
     * @return string
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
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
     * Whether it's the merchant's primary Business Entity.
     *
     * @return bool
     */
    public function getPrimary(): ?bool
    {
        return $this->primary;
    }

    
    /**
     * Returns the Shopify Payments account information for the shop. Includes current balances across all currencies, payout schedules, and bank account configurations.
     *
     * The account includes [`ShopifyPaymentsBalanceTransaction`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsBalanceTransaction) records showing charges, refunds, and adjustments that affect your balance. Also includes [`ShopifyPaymentsDispute`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsDispute) records and [`ShopifyPaymentsPayout`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsPayout) history between the account and connected [`ShopifyPaymentsBankAccount`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsBankAccount) configurations.
     *
     * @return ShopifyShopifyPaymentsAccount
     */
    public function getShopifyPaymentsAccount(): ?ShopifyShopifyPaymentsAccount
    {
        return $this->shopifyPaymentsAccount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['address']) && $data['address'] !== null) {
                $instance->address = ShopifyBusinessEntityAddress::fromArray($data['address']);
            }
            if (isset($data['archived']) && $data['archived'] !== null) {
                $instance->archived = $data['archived'];
            }
            if (isset($data['companyName']) && $data['companyName'] !== null) {
                $instance->companyName = $data['companyName'];
            }
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['primary']) && $data['primary'] !== null) {
                $instance->primary = $data['primary'];
            }
            if (isset($data['shopifyPaymentsAccount']) && $data['shopifyPaymentsAccount'] !== null) {
                $instance->shopifyPaymentsAccount = ShopifyShopifyPaymentsAccount::fromArray($data['shopifyPaymentsAccount']);
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
            if ($this->address !== null) {
                $data['address'] = $this->address->asArray();
            }
            if ($this->archived !== null) {
                $data['archived'] = $this->archived;
            }
            if ($this->companyName !== null) {
                $data['companyName'] = $this->companyName;
            }
            if ($this->displayName !== null) {
                $data['displayName'] = $this->displayName;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->primary !== null) {
                $data['primary'] = $this->primary;
            }
            if ($this->shopifyPaymentsAccount !== null) {
                $data['shopifyPaymentsAccount'] = $this->shopifyPaymentsAccount->asArray();
            }
            return $data;
        }
}
