<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderTransaction;

/**
 * The status of a customer's payment for an order.
 */
class ShopifyOrderPaymentStatus
{
    protected $errorMessage;
    protected $paymentReferenceId;
    protected $status;
    protected $transactions;
    protected $translatedErrorMessage;

    
    /**
     * A message describing an error during the asynchronous processing of a payment.
     *
     * @return string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    
    /**
     * The ID of the payment, initially returned by an `orderCreateMandatePayment` or `orderCreatePayment` mutation.
     *
     * @return string
     */
    public function getPaymentReferenceId(): ?string
    {
        return $this->paymentReferenceId;
    }

    
    /**
     * The status of the payment.
     *
     * @return string A ShopifyOrderPaymentStatusResultEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The transaction associated with the payment.
     *
     * @return ShopifyOrderTransaction[]
     */
    public function getTransactions(): ?array
    {
        return $this->transactions;
    }

    
    /**
     * A translated message describing an error during the asynchronous processing of a payment.
     *
     * @return string
     */
    public function getTranslatedErrorMessage(): ?string
    {
        return $this->translatedErrorMessage;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['errorMessage']) && $data['errorMessage'] !== null) {
                $instance->errorMessage = $data['errorMessage'];
            }
            if (isset($data['paymentReferenceId']) && $data['paymentReferenceId'] !== null) {
                $instance->paymentReferenceId = $data['paymentReferenceId'];
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['transactions']) && $data['transactions'] !== null) {
                $instance->transactions = array_map(function($item) { return ShopifyOrderTransaction::fromArray($item); }, $data['transactions']);
            }
            if (isset($data['translatedErrorMessage']) && $data['translatedErrorMessage'] !== null) {
                $instance->translatedErrorMessage = $data['translatedErrorMessage'];
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
            if ($this->errorMessage !== null) {
                $data['errorMessage'] = $this->errorMessage;
            }
            if ($this->paymentReferenceId !== null) {
                $data['paymentReferenceId'] = $this->paymentReferenceId;
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->transactions !== null) {
                $data['transactions'] = array_map(function($item) { return $item->asArray(); }, $this->transactions);
            }
            if ($this->translatedErrorMessage !== null) {
                $data['translatedErrorMessage'] = $this->translatedErrorMessage;
            }
            return $data;
        }
}
