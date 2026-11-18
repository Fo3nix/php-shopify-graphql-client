<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShopPayPaymentRequest;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShopPayPaymentRequestReceiptProcessingStatus;

/**
 * The receipt of Shop Pay payment request session submission.
 */
class ShopifyShopPayPaymentRequestReceipt
{
    protected $createdAt;
    protected $order;
    protected $paymentRequest;
    protected $processingStatus;
    protected $sourceIdentifier;
    protected $token;

    
    /**
     * The date and time when the payment request receipt was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The order that's associated with the payment request receipt.
     *
     * @return ShopifyOrder
     */
    public function getOrder(): ?ShopifyOrder
    {
        return $this->order;
    }

    
    /**
     * The shop pay payment request object.
     *
     * @return ShopifyShopPayPaymentRequest
     */
    public function getPaymentRequest(): ?ShopifyShopPayPaymentRequest
    {
        return $this->paymentRequest;
    }

    
    /**
     * The status of the payment request session submission.
     *
     * @return ShopifyShopPayPaymentRequestReceiptProcessingStatus
     */
    public function getProcessingStatus(): ?ShopifyShopPayPaymentRequestReceiptProcessingStatus
    {
        return $this->processingStatus;
    }

    
    /**
     * The source identifier provided in the `ShopPayPaymentRequestSessionCreate` mutation.
     *
     * @return string
     */
    public function getSourceIdentifier(): ?string
    {
        return $this->sourceIdentifier;
    }

    
    /**
     * The token of the receipt, initially returned by an `ShopPayPaymentRequestSessionSubmit` mutation.
     *
     * @return string
     */
    public function getToken(): ?string
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
