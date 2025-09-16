<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OrderTransaction;

class OrderPaymentStatus
{
    protected $errorMessage;
    protected $paymentReferenceId;
    protected $status;
    protected $transactions;
    protected $translatedErrorMessage;

    
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
    public function getPaymentReferenceId()
    {
        return $this->paymentReferenceId;
    }

    
    /**
     * @return OrderPaymentStatusResultEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return OrderTransaction[]
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    
    /**
     * @return string
     */
    public function getTranslatedErrorMessage()
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
                $instance->transactions = array_map(function($item) { return OrderTransaction::fromArray($item); }, $data['transactions']);
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
