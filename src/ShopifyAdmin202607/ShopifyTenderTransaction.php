<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrder;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTenderTransactionDetails;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyStaffMember;

class ShopifyTenderTransaction
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
     * @return ShopifyMoneyV2
     */
    public function getAmount()
    {
        return $this->amount;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyOrder
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    
    /**
     * @return Carbon
     */
    public function getProcessedAt()
    {
        return $this->processedAt;
    }

    
    /**
     * @return string
     */
    public function getRemoteReference()
    {
        return $this->remoteReference;
    }

    
    /**
     * @return bool
     */
    public function getTest()
    {
        return $this->test;
    }

    
    /**
     * @return ShopifyTenderTransactionDetails
     */
    public function getTransactionDetails()
    {
        return $this->transactionDetails;
    }

    
    /**
     * @return ShopifyStaffMember
     */
    public function getUser()
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
                $instance->transactionDetails = ShopifyTenderTransactionDetails::fromArray($data['transactionDetails']);
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
                $data['transactionDetails'] = $this->transactionDetails->asArray();
            }
            if ($this->user !== null) {
                $data['user'] = $this->user->asArray();
            }
            return $data;
        }
}
