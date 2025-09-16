<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Order;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionContract;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OrderTransactionConnection;

class SubscriptionBillingAttempt
{
    protected $completedAt;
    protected $createdAt;
    protected $errorCode;
    protected $errorMessage;
    protected $id;
    protected $idempotencyKey;
    protected $nextActionUrl;
    protected $order;
    protected $originTime;
    protected $paymentGroupId;
    protected $paymentSessionId;
    protected $processingError;
    protected $ready;
    protected $respectInventoryPolicy;
    protected $subscriptionContract;
    protected $transactions;

    
    /**
     * @return Carbon
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return SubscriptionBillingAttemptErrorCodeEnumObject
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    
    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getIdempotencyKey()
    {
        return $this->idempotencyKey;
    }

    
    /**
     * @return string
     */
    public function getNextActionUrl()
    {
        return $this->nextActionUrl;
    }

    
    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return Carbon
     */
    public function getOriginTime()
    {
        return $this->originTime;
    }

    
    /**
     * @return string
     */
    public function getPaymentGroupId()
    {
        return $this->paymentGroupId;
    }

    
    /**
     * @return string
     */
    public function getPaymentSessionId()
    {
        return $this->paymentSessionId;
    }

    
    /**
     * @return mixed
     */
    public function getProcessingError()
    {
        return $this->processingError;
    }

    
    /**
     * @return bool
     */
    public function getReady()
    {
        return $this->ready;
    }

    
    /**
     * @return bool
     */
    public function getRespectInventoryPolicy()
    {
        return $this->respectInventoryPolicy;
    }

    
    /**
     * @return SubscriptionContract
     */
    public function getSubscriptionContract()
    {
        return $this->subscriptionContract;
    }

    
    /**
     * @return OrderTransactionConnection
     */
    public function getTransactions()
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
            if (isset($data['completedAt']) && $data['completedAt'] !== null) {
                $instance->completedAt = new Carbon($data['completedAt']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['errorCode']) && $data['errorCode'] !== null) {
                $instance->errorCode = $data['errorCode'];
            }
            if (isset($data['errorMessage']) && $data['errorMessage'] !== null) {
                $instance->errorMessage = $data['errorMessage'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['idempotencyKey']) && $data['idempotencyKey'] !== null) {
                $instance->idempotencyKey = $data['idempotencyKey'];
            }
            if (isset($data['nextActionUrl']) && $data['nextActionUrl'] !== null) {
                $instance->nextActionUrl = $data['nextActionUrl'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = Order::fromArray($data['order']);
            }
            if (isset($data['originTime']) && $data['originTime'] !== null) {
                $instance->originTime = new Carbon($data['originTime']);
            }
            if (isset($data['paymentGroupId']) && $data['paymentGroupId'] !== null) {
                $instance->paymentGroupId = $data['paymentGroupId'];
            }
            if (isset($data['paymentSessionId']) && $data['paymentSessionId'] !== null) {
                $instance->paymentSessionId = $data['paymentSessionId'];
            }
            if (isset($data['processingError']) && $data['processingError'] !== null) {
                $instance->processingError = $data['processingError'];
            }
            if (isset($data['ready']) && $data['ready'] !== null) {
                $instance->ready = $data['ready'];
            }
            if (isset($data['respectInventoryPolicy']) && $data['respectInventoryPolicy'] !== null) {
                $instance->respectInventoryPolicy = $data['respectInventoryPolicy'];
            }
            if (isset($data['subscriptionContract']) && $data['subscriptionContract'] !== null) {
                $instance->subscriptionContract = SubscriptionContract::fromArray($data['subscriptionContract']);
            }
            if (isset($data['transactions']) && $data['transactions'] !== null) {
                $instance->transactions = OrderTransactionConnection::fromArray($data['transactions']);
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
            if ($this->completedAt !== null) {
                $data['completedAt'] = $this->completedAt->toIso8601String();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->errorCode !== null) {
                $data['errorCode'] = $this->errorCode;
            }
            if ($this->errorMessage !== null) {
                $data['errorMessage'] = $this->errorMessage;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->idempotencyKey !== null) {
                $data['idempotencyKey'] = $this->idempotencyKey;
            }
            if ($this->nextActionUrl !== null) {
                $data['nextActionUrl'] = $this->nextActionUrl;
            }
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->originTime !== null) {
                $data['originTime'] = $this->originTime->toIso8601String();
            }
            if ($this->paymentGroupId !== null) {
                $data['paymentGroupId'] = $this->paymentGroupId;
            }
            if ($this->paymentSessionId !== null) {
                $data['paymentSessionId'] = $this->paymentSessionId;
            }
            if ($this->processingError !== null) {
                $data['processingError'] = $this->processingError;
            }
            if ($this->ready !== null) {
                $data['ready'] = $this->ready;
            }
            if ($this->respectInventoryPolicy !== null) {
                $data['respectInventoryPolicy'] = $this->respectInventoryPolicy;
            }
            if ($this->subscriptionContract !== null) {
                $data['subscriptionContract'] = $this->subscriptionContract->asArray();
            }
            if ($this->transactions !== null) {
                $data['transactions'] = $this->transactions->asArray();
            }
            return $data;
        }
}
