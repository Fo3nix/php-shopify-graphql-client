<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OrderTransaction;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PaymentDetails;

class SuggestedOrderTransaction
{
    protected $accountNumber;
    protected $amount;
    protected $amountSet;
    protected $formattedGateway;
    protected $gateway;
    protected $kind;
    protected $maximumRefundable;
    protected $maximumRefundableSet;
    protected $parentTransaction;
    protected $paymentDetails;

    
    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    
    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    
    /**
     * @return MoneyBag
     */
    public function getAmountSet()
    {
        return $this->amountSet;
    }

    
    /**
     * @return string
     */
    public function getFormattedGateway()
    {
        return $this->formattedGateway;
    }

    
    /**
     * @return string
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    
    /**
     * @return SuggestedOrderTransactionKindEnumObject
     */
    public function getKind()
    {
        return $this->kind;
    }

    
    /**
     * @return string
     */
    public function getMaximumRefundable()
    {
        return $this->maximumRefundable;
    }

    
    /**
     * @return MoneyBag
     */
    public function getMaximumRefundableSet()
    {
        return $this->maximumRefundableSet;
    }

    
    /**
     * @return OrderTransaction
     */
    public function getParentTransaction()
    {
        return $this->parentTransaction;
    }

    
    /**
     * @return PaymentDetails
     */
    public function getPaymentDetails()
    {
        return $this->paymentDetails;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['accountNumber']) && $data['accountNumber'] !== null) {
                $instance->accountNumber = $data['accountNumber'];
            }
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = $data['amount'];
            }
            if (isset($data['amountSet']) && $data['amountSet'] !== null) {
                $instance->amountSet = MoneyBag::fromArray($data['amountSet']);
            }
            if (isset($data['formattedGateway']) && $data['formattedGateway'] !== null) {
                $instance->formattedGateway = $data['formattedGateway'];
            }
            if (isset($data['gateway']) && $data['gateway'] !== null) {
                $instance->gateway = $data['gateway'];
            }
            if (isset($data['kind']) && $data['kind'] !== null) {
                $instance->kind = $data['kind'];
            }
            if (isset($data['maximumRefundable']) && $data['maximumRefundable'] !== null) {
                $instance->maximumRefundable = $data['maximumRefundable'];
            }
            if (isset($data['maximumRefundableSet']) && $data['maximumRefundableSet'] !== null) {
                $instance->maximumRefundableSet = MoneyBag::fromArray($data['maximumRefundableSet']);
            }
            if (isset($data['parentTransaction']) && $data['parentTransaction'] !== null) {
                $instance->parentTransaction = OrderTransaction::fromArray($data['parentTransaction']);
            }
            if (isset($data['paymentDetails']) && $data['paymentDetails'] !== null) {
                $instance->paymentDetails = PaymentDetails::fromArray($data['paymentDetails']);
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
            if ($this->accountNumber !== null) {
                $data['accountNumber'] = $this->accountNumber;
            }
            if ($this->amount !== null) {
                $data['amount'] = $this->amount;
            }
            if ($this->amountSet !== null) {
                $data['amountSet'] = $this->amountSet->asArray();
            }
            if ($this->formattedGateway !== null) {
                $data['formattedGateway'] = $this->formattedGateway;
            }
            if ($this->gateway !== null) {
                $data['gateway'] = $this->gateway;
            }
            if ($this->kind !== null) {
                $data['kind'] = $this->kind;
            }
            if ($this->maximumRefundable !== null) {
                $data['maximumRefundable'] = $this->maximumRefundable;
            }
            if ($this->maximumRefundableSet !== null) {
                $data['maximumRefundableSet'] = $this->maximumRefundableSet->asArray();
            }
            if ($this->parentTransaction !== null) {
                $data['parentTransaction'] = $this->parentTransaction->asArray();
            }
            if ($this->paymentDetails !== null) {
                $data['paymentDetails'] = $this->paymentDetails->asArray();
            }
            return $data;
        }
}
