<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Carbon\Carbon;

/**
 * Tracks revenue that was captured outside of Shopify's billing system but needs to be attributed to the app for comprehensive revenue reporting and partner analytics. This object enables accurate revenue tracking when apps process payments through external systems while maintaining visibility into total app performance.
 *
 * External revenue attribution is essential for apps that offer multiple payment channels or process certain transactions outside Shopify's billing infrastructure. For example, an enterprise app might process large custom contracts through external payment processors, or a marketplace app could handle direct merchant-to-merchant transactions that still generate app commissions.
 *
 * Use the `AppRevenueAttributionRecord` object to:
 * - Report revenue from external payment processors and billing systems
 * - Track commission-based earnings from marketplace or referral activities
 * - Maintain comprehensive revenue analytics across multiple payment channels
 * - Ensure accurate partner revenue sharing and commission calculations
 * - Generate complete financial reports that include all app-generated revenue streams
 * - Support compliance requirements for external revenue documentation
 *
 * Each attribution record includes the captured amount, external transaction timestamp, and idempotency keys to prevent duplicate reporting. The record type field categorizes different revenue streams, enabling detailed analytics and reporting segmentation.
 *
 * Revenue attribution records are particularly important for apps participating in Shopify's partner program, as they ensure accurate revenue sharing calculations and comprehensive performance metrics. The captured timestamp reflects when the external payment was processed, not when the attribution record was created in Shopify.
 *
 * For detailed revenue attribution values, see the [AppRevenueAttributionType enum](https://shopify.dev/docs/api/admin-graphql/latest/enums/AppRevenueAttributionType).
 */
class ShopifyAppRevenueAttributionRecord implements ShopifyNode
{
    protected $amount;
    protected $capturedAt;
    protected $createdAt;
    protected $id;
    protected $idempotencyKey;
    protected $test;
    protected $type;

    
    /**
     * The financial amount captured in this attribution.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmount(): ?ShopifyMoneyV2
    {
        return $this->amount;
    }

    
    /**
     * The timestamp when the financial amount was captured.
     *
     * @return Carbon
     */
    public function getCapturedAt(): ?Carbon
    {
        return $this->capturedAt;
    }

    
    /**
     * The timestamp at which this revenue attribution was issued.
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
     * The unique value submitted during the creation of the app revenue attribution record.
     * For more information, refer to
     * [Idempotent requests](https://shopify.dev/api/usage/idempotent-requests).
     *
     * @return string
     */
    public function getIdempotencyKey(): ?string
    {
        return $this->idempotencyKey;
    }

    
    /**
     * Indicates whether this is a test submission.
     *
     * @return bool
     */
    public function getTest(): ?bool
    {
        return $this->test;
    }

    
    /**
     * The type of revenue attribution.
     *
     * @return string A ShopifyAppRevenueAttributionTypeEnumObject value
     */
    public function getType(): ?string
    {
        return $this->type;
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
            if (isset($data['capturedAt']) && $data['capturedAt'] !== null) {
                $instance->capturedAt = new Carbon($data['capturedAt']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['idempotencyKey']) && $data['idempotencyKey'] !== null) {
                $instance->idempotencyKey = $data['idempotencyKey'];
            }
            if (isset($data['test']) && $data['test'] !== null) {
                $instance->test = $data['test'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
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
            if ($this->capturedAt !== null) {
                $data['capturedAt'] = $this->capturedAt->toIso8601String();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->idempotencyKey !== null) {
                $data['idempotencyKey'] = $this->idempotencyKey;
            }
            if ($this->test !== null) {
                $data['test'] = $this->test;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            return $data;
        }
}
