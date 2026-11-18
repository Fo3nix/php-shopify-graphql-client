<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyAppSubscriptionLineItem;

/**
 * A recurring billing agreement that associates an [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) with a merchant's shop. Each subscription contains one or more [`AppSubscriptionLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppSubscriptionLineItem) objects that define the pricing structure. The pricing structure can include recurring charges, usage-based pricing, or both.
 *
 * The subscription tracks billing details including the current period end date, trial days, and [`AppSubscriptionStatus`](https://shopify.dev/docs/api/admin-graphql/latest/enums/AppSubscriptionStatus).
 *
 * Merchants must approve subscriptions through a [confirmation URL](https://shopify.dev/docs/api/admin-graphql/latest/mutations/appSubscriptionCreate#returns-confirmationUrl) before billing begins. Test subscriptions allow developers to verify billing flows without actual charges.
 *
 * Learn more about [subscription billing](https://shopify.dev/docs/apps/launch/billing/subscription-billing) and [testing charges](https://shopify.dev/docs/apps/launch/billing/managed-pricing#test-charges).
 */
class ShopifyAppSubscription implements ShopifyNode
{
    protected $createdAt;
    protected $currentPeriodEnd;
    protected $id;
    protected $lineItems;
    protected $name;
    protected $returnUrl;
    protected $status;
    protected $test;
    protected $trialDays;

    
    /**
     * The date and time when the app subscription was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The date and time when the current app subscription period ends. Returns `null` if the subscription isn't active.
     *
     * @return Carbon
     */
    public function getCurrentPeriodEnd(): ?Carbon
    {
        return $this->currentPeriodEnd;
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
     * The plans attached to the app subscription.
     *
     * @return ShopifyAppSubscriptionLineItem[]
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    
    /**
     * The name of the app subscription.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The URL that the merchant is redirected to after approving the app subscription.
     *
     * @return string
     */
    public function getReturnUrl(): mixed
    {
        return $this->returnUrl;
    }

    
    /**
     * The status of the app subscription.
     *
     * @return string A ShopifyAppSubscriptionStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * Specifies whether the app subscription is a test transaction.
     *
     * @return bool
     */
    public function getTest(): ?bool
    {
        return $this->test;
    }

    
    /**
     * The number of free trial days, starting at the subscription's creation date, by which billing is delayed.
     *
     * @return int
     */
    public function getTrialDays(): ?int
    {
        return $this->trialDays;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currentPeriodEnd']) && $data['currentPeriodEnd'] !== null) {
                $instance->currentPeriodEnd = new Carbon($data['currentPeriodEnd']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = array_map(function($item) { return ShopifyAppSubscriptionLineItem::fromArray($item); }, $data['lineItems']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['returnUrl']) && $data['returnUrl'] !== null) {
                $instance->returnUrl = $data['returnUrl'];
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['test']) && $data['test'] !== null) {
                $instance->test = $data['test'];
            }
            if (isset($data['trialDays']) && $data['trialDays'] !== null) {
                $instance->trialDays = $data['trialDays'];
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->currentPeriodEnd !== null) {
                $data['currentPeriodEnd'] = $this->currentPeriodEnd->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = array_map(function($item) { return $item->asArray(); }, $this->lineItems);
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->returnUrl !== null) {
                $data['returnUrl'] = $this->returnUrl;
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->test !== null) {
                $data['test'] = $this->test;
            }
            if ($this->trialDays !== null) {
                $data['trialDays'] = $this->trialDays;
            }
            return $data;
        }
}
