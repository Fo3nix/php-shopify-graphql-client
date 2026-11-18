<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

/**
 * Represents a one-time purchase of app services or features by a merchant, tracking the transaction details and status throughout the billing lifecycle. This object captures essential information about non-recurring charges, including price and merchant acceptance status.
 *
 * One-time purchases are particularly valuable for apps offering premium features, professional services, or digital products that don't require ongoing subscriptions. For instance, a photography app might sell premium filters as one-time purchases, while a marketing app could charge for individual campaign setups or advanced analytics reports.
 *
 * Use the `AppPurchaseOneTime` object to:
 * - Track the status of individual feature purchases and service charges
 * - Track payment status for premium content or digital products
 * - Access purchase details to enable or disable features based on payment status
 *
 * The purchase status indicates whether the charge is pending merchant approval, has been accepted and processed, or was declined. This status tracking is crucial for apps that need to conditionally enable features based on successful payment completion.
 *
 * Purchase records include creation timestamps, pricing details, and test flags to distinguish between production charges and development testing. The test flag ensures that development and staging environments don't generate actual charges while maintaining realistic billing flow testing.
 *
 * For detailed implementation patterns and billing best practices, see the [one-time-charges page](https://shopify.dev/docs/apps/launch/billing/one-time-charges).
 */
class ShopifyAppPurchaseOneTime implements ShopifyAppPurchase, ShopifyNode
{
    protected $createdAt;
    protected $id;
    protected $name;
    protected $price;
    protected $status;
    protected $test;

    
    /**
     * The date and time when the app purchase occurred.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
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
     * The name of the app purchase.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The amount to be charged to the store for the app purchase.
     *
     * @return ShopifyMoneyV2
     */
    public function getPrice(): ?ShopifyMoneyV2
    {
        return $this->price;
    }

    
    /**
     * The status of the app purchase.
     *
     * @return string A ShopifyAppPurchaseStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * Whether the app purchase is a test transaction.
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
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = ShopifyMoneyV2::fromArray($data['price']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->price !== null) {
                $data['price'] = $this->price->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->test !== null) {
                $data['test'] = $this->test;
            }
            return $data;
        }
}
