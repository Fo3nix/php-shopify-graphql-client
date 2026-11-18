<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Carbon\Carbon;

/**
 * Represents monetary credits that merchants can apply toward future app purchases, subscriptions, or usage-based billing within their Shopify store. App credits provide a flexible way to offer refunds, promotional credits, or compensation without processing external payments.
 *
 * For example, if a merchant experiences service downtime, an app might issue credits equivalent to the affected billing period. These credits can apply to future charges, reducing the merchant's next invoice or extending their subscription period.
 *
 * Use the `AppCredit` object to:
 * - Issue refunds for service interruptions or billing disputes
 * - Provide promotional credits for new merchant onboarding
 * - Compensate merchants for app-related issues or downtime
 * - Create loyalty rewards or referral bonuses within your billing system
 * - Track credit balances and application history for accounting purposes
 *
 * For comprehensive billing strategies and credit management patterns, see the [subscription billing guide](https://shopify.dev/docs/apps/launch/billing/subscription-billing).
 */
class ShopifyAppCredit implements ShopifyNode
{
    protected $amount;
    protected $createdAt;
    protected $description;
    protected $id;
    protected $test;

    
    /**
     * The amount that can be used towards future app purchases in Shopify.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmount(): ?ShopifyMoneyV2
    {
        return $this->amount;
    }

    
    /**
     * The date and time when the app credit was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The description of the app credit.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
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
     * Whether the app credit is a test transaction.
     *
     * @return bool
     */
    public function getTest(): ?bool
    {
        return $this->test;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = ShopifyMoneyV2::fromArray($data['amount']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['test']) && $data['test'] !== null) {
                $instance->test = $data['test'];
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
            if ($this->amount !== null) {
                $data['amount'] = $this->amount->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->test !== null) {
                $data['test'] = $this->test;
            }
            return $data;
        }
}
