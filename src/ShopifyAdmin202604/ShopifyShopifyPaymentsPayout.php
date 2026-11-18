<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopifyPaymentsBankAccount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyBusinessEntity;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopifyPaymentsPayoutSummary;

/**
 * A transfer of funds between a merchant's Shopify Payments balance and their [`ShopifyPaymentsBankAccount`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsBankAccount). Provides the [net amount](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsPayout#field-ShopifyPaymentsPayout.fields.net), [issue date](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsPayout#field-ShopifyPaymentsPayout.fields.issuedAt), and current [`ShopifyPaymentsPayoutStatus`](https://shopify.dev/docs/api/admin-graphql/latest/enums/ShopifyPaymentsPayoutStatus).
 *
 * The payout includes a [`ShopifyPaymentsPayoutSummary`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsPayoutSummary) that breaks down fees and gross amounts by transaction type, such as charges, refunds, and adjustments. The [`ShopifyPaymentsPayoutTransactionType`](https://shopify.dev/docs/api/admin-graphql/latest/enums/ShopifyPaymentsPayoutTransactionType) indicates whether funds move into the bank account (deposit) or back to Shopify Payments (withdrawal).
 */
class ShopifyShopifyPaymentsPayout implements ShopifyLegacyInteroperability, ShopifyNode
{
    protected $bankAccount;
    protected $businessEntity;
    protected $externalTraceId;
    protected $gross;
    protected $id;
    protected $issuedAt;
    protected $legacyResourceId;
    protected $net;
    protected $status;
    protected $summary;
    protected $transactionType;

    
    /**
     * The bank account for the payout.
     *
     * @return ShopifyShopifyPaymentsBankAccount
     */
    public function getBankAccount(): ?ShopifyShopifyPaymentsBankAccount
    {
        return $this->bankAccount;
    }

    
    /**
     * The business entity associated with the payout.
     *
     * @return ShopifyBusinessEntity
     */
    public function getBusinessEntity(): ?ShopifyBusinessEntity
    {
        return $this->businessEntity;
    }

    
    /**
     * A unique trace ID from the financial institution. Use this reference number to track the payout with your provider.
     *
     * @return string
     */
    public function getExternalTraceId(): ?string
    {
        return $this->externalTraceId;
    }

    
    /**
     * The total amount and currency of the payout.
     *
     * @return ShopifyMoneyV2
     */
    public function getGross(): ?ShopifyMoneyV2
    {
        return $this->gross;
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
     * The exact time when the payout was issued. The payout only contains
     * balance transactions that were available at this time.
     *
     * @return Carbon
     */
    public function getIssuedAt(): ?Carbon
    {
        return $this->issuedAt;
    }

    
    /**
     * The ID of the corresponding resource in the REST Admin API.
     *
     * @return string
     */
    public function getLegacyResourceId(): mixed
    {
        return $this->legacyResourceId;
    }

    
    /**
     * The total amount and currency of the payout.
     *
     * @return ShopifyMoneyV2
     */
    public function getNet(): ?ShopifyMoneyV2
    {
        return $this->net;
    }

    
    /**
     * The transfer status of the payout.
     *
     * @return string A ShopifyShopifyPaymentsPayoutStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The summary of the payout.
     *
     * @return ShopifyShopifyPaymentsPayoutSummary
     */
    public function getSummary(): ?ShopifyShopifyPaymentsPayoutSummary
    {
        return $this->summary;
    }

    
    /**
     * The direction of the payout.
     *
     * @return string A ShopifyShopifyPaymentsPayoutTransactionTypeEnumObject value
     */
    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['bankAccount']) && $data['bankAccount'] !== null) {
                $instance->bankAccount = ShopifyShopifyPaymentsBankAccount::fromArray($data['bankAccount']);
            }
            if (isset($data['businessEntity']) && $data['businessEntity'] !== null) {
                $instance->businessEntity = ShopifyBusinessEntity::fromArray($data['businessEntity']);
            }
            if (isset($data['externalTraceId']) && $data['externalTraceId'] !== null) {
                $instance->externalTraceId = $data['externalTraceId'];
            }
            if (isset($data['gross']) && $data['gross'] !== null) {
                $instance->gross = ShopifyMoneyV2::fromArray($data['gross']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['issuedAt']) && $data['issuedAt'] !== null) {
                $instance->issuedAt = new Carbon($data['issuedAt']);
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['net']) && $data['net'] !== null) {
                $instance->net = ShopifyMoneyV2::fromArray($data['net']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['summary']) && $data['summary'] !== null) {
                $instance->summary = ShopifyShopifyPaymentsPayoutSummary::fromArray($data['summary']);
            }
            if (isset($data['transactionType']) && $data['transactionType'] !== null) {
                $instance->transactionType = $data['transactionType'];
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
            if ($this->bankAccount !== null) {
                $data['bankAccount'] = $this->bankAccount->asArray();
            }
            if ($this->businessEntity !== null) {
                $data['businessEntity'] = $this->businessEntity->asArray();
            }
            if ($this->externalTraceId !== null) {
                $data['externalTraceId'] = $this->externalTraceId;
            }
            if ($this->gross !== null) {
                $data['gross'] = $this->gross->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->issuedAt !== null) {
                $data['issuedAt'] = $this->issuedAt->toIso8601String();
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->net !== null) {
                $data['net'] = $this->net->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->summary !== null) {
                $data['summary'] = $this->summary->asArray();
            }
            if ($this->transactionType !== null) {
                $data['transactionType'] = $this->transactionType;
            }
            return $data;
        }
}
