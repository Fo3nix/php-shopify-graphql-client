<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopPayPaymentRequest;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopPayPaymentRequestReceiptProcessingStatus;

class ShopifyShopPayPaymentRequestReceipt
{
    protected $createdAt;
    protected $order;
    protected $paymentRequest;
    protected $processingStatus;
    protected $sourceIdentifier;
    protected $token;

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return ShopifyOrder
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return ShopifyShopPayPaymentRequest
     */
    public function getPaymentRequest()
    {
        return $this->paymentRequest;
    }

    
    /**
     * @return ShopifyShopPayPaymentRequestReceiptProcessingStatus
     */
    public function getProcessingStatus()
    {
        return $this->processingStatus;
    }

    
    /**
     * @return string
     */
    public function getSourceIdentifier()
    {
        return $this->sourceIdentifier;
    }

    
    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
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
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = ShopifyOrder::fromArray($data['order']);
            }
            if (isset($data['paymentRequest']) && $data['paymentRequest'] !== null) {
                $instance->paymentRequest = ShopifyShopPayPaymentRequest::fromArray($data['paymentRequest']);
            }
            if (isset($data['processingStatus']) && $data['processingStatus'] !== null) {
                $instance->processingStatus = ShopifyShopPayPaymentRequestReceiptProcessingStatus::fromArray($data['processingStatus']);
            }
            if (isset($data['sourceIdentifier']) && $data['sourceIdentifier'] !== null) {
                $instance->sourceIdentifier = $data['sourceIdentifier'];
            }
            if (isset($data['token']) && $data['token'] !== null) {
                $instance->token = $data['token'];
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
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->paymentRequest !== null) {
                $data['paymentRequest'] = $this->paymentRequest->asArray();
            }
            if ($this->processingStatus !== null) {
                $data['processingStatus'] = $this->processingStatus->asArray();
            }
            if ($this->sourceIdentifier !== null) {
                $data['sourceIdentifier'] = $this->sourceIdentifier;
            }
            if ($this->token !== null) {
                $data['token'] = $this->token;
            }
            return $data;
        }
}
