<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAppPlanV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAppUsageRecordConnection;

/**
 * Represents a component of an app subscription that contains pricing details for either recurring fees or usage-based charges. Each subscription has exactly 1 or 2 line items - one for recurring fees and/or one for usage fees.
 *
 * If a subscription has both recurring and usage pricing, there will be 2 line items. If it only has one type of pricing, the subscription will have a single line item for that pricing model.
 *
 * Use the `AppSubscriptionLineItem` object to:
 * - View the pricing terms a merchant has agreed to
 * - Distinguish between recurring and usage fee components
 * - Access detailed billing information for each pricing component
 *
 * This read-only object provides visibility into the subscription's pricing structure without allowing modifications.
 *
 * Read about subscription pricing models in the [billing architecture guide](https://shopify.dev/docs/apps/launch/billing/subscription-billing).
 */
class ShopifyAppSubscriptionLineItem
{
    protected $id;
    protected $plan;
    protected $usageRecords;

    
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
     * The pricing model for the app subscription.
     *
     * @return ShopifyAppPlanV2
     */
    public function getPlan(): ?ShopifyAppPlanV2
    {
        return $this->plan;
    }

    
    /**
     * A list of the store's usage records for a usage pricing plan.
     *
     * @return ShopifyAppUsageRecordConnection
     */
    public function getUsageRecords(): ?ShopifyAppUsageRecordConnection
    {
        return $this->usageRecords;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['plan']) && $data['plan'] !== null) {
                $instance->plan = ShopifyAppPlanV2::fromArray($data['plan']);
            }
            if (isset($data['usageRecords']) && $data['usageRecords'] !== null) {
                $instance->usageRecords = ShopifyAppUsageRecordConnection::fromArray($data['usageRecords']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->plan !== null) {
                $data['plan'] = $this->plan->asArray();
            }
            if ($this->usageRecords !== null) {
                $data['usageRecords'] = $this->usageRecords->asArray();
            }
            return $data;
        }
}
