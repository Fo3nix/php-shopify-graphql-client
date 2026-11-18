<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyOrder;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyTenderTransactionDetailsHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyStaffMember;

/**
 * A TenderTransaction represents a transaction with financial impact on a shop's balance sheet. A tender transaction always
 * represents actual money movement between a buyer and a shop. TenderTransactions can be used instead of OrderTransactions
 * for reconciling a shop's cash flow. A TenderTransaction is immutable once created.
 */
class ShopifyTenderTransaction implements ShopifyNode
{
    protected $amount;
    protected $id;
    protected $order;
    protected $paymentMethod;
    protected $processedAt;
    protected $remoteReference;
    protected $test;
    protected $transactionDetails;
    protected $user;

    
    /**
     * The amount and currency of the tender transaction.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmount(): ?ShopifyMoneyV2
    {
        return $this->amount;
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
     * The order that's related to the tender transaction. This value is null if the order has been deleted.
     *
     * @return ShopifyOrder
     */
    public function getOrder(): ?ShopifyOrder
    {
        return $this->order;
    }

    
    /**
     * Information about the payment method used for the transaction.
     *
     * @return string
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    
    /**
     * Date and time when the transaction was processed.
     *
     * @return Carbon
     */
    public function getProcessedAt(): ?Carbon
    {
        return $this->processedAt;
    }

    
    /**
     * The remote gateway reference associated with the tender transaction.
     *
     * @return string
     */
    public function getRemoteReference(): ?string
    {
        return $this->remoteReference;
    }

    
    /**
     * Whether the transaction is a test transaction.
     *
     * @return bool
     */
    public function getTest(): ?bool
    {
        return $this->test;
    }

    
    /**
     * Information about the payment instrument used for the transaction.
     *
     * @return ShopifyTenderTransactionCreditCardDetails
     */
    public function getTransactionDetails(): ?ShopifyTenderTransactionCreditCardDetails
    {
        return $this->transactionDetails;
    }

    
    /**
     * The staff member who performed the transaction.
     *
     * @return ShopifyStaffMember
     */
    public function getUser(): ?ShopifyStaffMember
    {
        return $this->user;
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
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = ShopifyOrder::fromArray($data['order']);
            }
            if (isset($data['paymentMethod']) && $data['paymentMethod'] !== null) {
                $instance->paymentMethod = $data['paymentMethod'];
            }
            if (isset($data['processedAt']) && $data['processedAt'] !== null) {
                $instance->processedAt = new Carbon($data['processedAt']);
            }
            if (isset($data['remoteReference']) && $data['remoteReference'] !== null) {
                $instance->remoteReference = $data['remoteReference'];
            }
            if (isset($data['test']) && $data['test'] !== null) {
                $instance->test = $data['test'];
            }
            if (isset($data['transactionDetails']) && $data['transactionDetails'] !== null) {
                $instance->transactionDetails = ShopifyTenderTransactionDetailsHydrator::fromArray($data['transactionDetails']);
            }
            if (isset($data['user']) && $data['user'] !== null) {
                $instance->user = ShopifyStaffMember::fromArray($data['user']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->paymentMethod !== null) {
                $data['paymentMethod'] = $this->paymentMethod;
            }
            if ($this->processedAt !== null) {
                $data['processedAt'] = $this->processedAt->toIso8601String();
            }
            if ($this->remoteReference !== null) {
                $data['remoteReference'] = $this->remoteReference;
            }
            if ($this->test !== null) {
                $data['test'] = $this->test;
            }
            if ($this->transactionDetails !== null) {
                $data['transactionDetails'] = ShopifyTenderTransactionDetailsHydrator::toArray($this->transactionDetails);
            }
            if ($this->user !== null) {
                $data['user'] = $this->user->asArray();
            }
            return $data;
        }
}
