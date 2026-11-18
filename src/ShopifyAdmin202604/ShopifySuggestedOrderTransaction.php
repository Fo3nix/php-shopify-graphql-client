<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOrderTransaction;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPaymentDetailsHydrator;

/**
 * A suggested transaction. Suggested transaction are usually used in the context of refunds
 * and exchanges.
 */
class ShopifySuggestedOrderTransaction
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
     * The masked account number associated with the payment method.
     *
     * @return string
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    
    /**
     * The amount of the transaction.
     *
     * @return string
     */
    public function getAmount(): mixed
    {
        return $this->amount;
    }

    
    /**
     * The amount and currency of the suggested order transaction in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getAmountSet(): ?ShopifyMoneyBag
    {
        return $this->amountSet;
    }

    
    /**
     * The human-readable payment gateway name suggested to process the transaction.
     *
     * @return string
     */
    public function getFormattedGateway(): ?string
    {
        return $this->formattedGateway;
    }

    
    /**
     * The suggested payment gateway used to process the transaction.
     *
     * @return string
     */
    public function getGateway(): ?string
    {
        return $this->gateway;
    }

    
    /**
     * Specifies the kind of the suggested order transaction.
     *
     * @return string A ShopifySuggestedOrderTransactionKindEnumObject value
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    
    /**
     * Specifies the available amount to refund on the gateway. Only available within SuggestedRefund.
     *
     * @return string
     */
    public function getMaximumRefundable(): mixed
    {
        return $this->maximumRefundable;
    }

    
    /**
     * Specifies the available amount to refund on the gateway in shop and presentment currencies. Only available within SuggestedRefund.
     *
     * @return ShopifyMoneyBag
     */
    public function getMaximumRefundableSet(): ?ShopifyMoneyBag
    {
        return $this->maximumRefundableSet;
    }

    
    /**
     * The associated parent transaction, for example the authorization of a capture.
     *
     * @return ShopifyOrderTransaction
     */
    public function getParentTransaction(): ?ShopifyOrderTransaction
    {
        return $this->parentTransaction;
    }

    
    /**
     * The associated payment details related to the transaction.
     *
     * @return ShopifyCardPaymentDetails|ShopifyLocalPaymentMethodsPaymentDetails|ShopifyPaypalWalletPaymentDetails|ShopifyShopPayInstallmentsPaymentDetails
     */
    public function getPaymentDetails(): ShopifyCardPaymentDetails|ShopifyLocalPaymentMethodsPaymentDetails|ShopifyPaypalWalletPaymentDetails|ShopifyShopPayInstallmentsPaymentDetails|null
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
                $instance->amountSet = ShopifyMoneyBag::fromArray($data['amountSet']);
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
                $instance->maximumRefundableSet = ShopifyMoneyBag::fromArray($data['maximumRefundableSet']);
            }
            if (isset($data['parentTransaction']) && $data['parentTransaction'] !== null) {
                $instance->parentTransaction = ShopifyOrderTransaction::fromArray($data['parentTransaction']);
            }
            if (isset($data['paymentDetails']) && $data['paymentDetails'] !== null) {
                $instance->paymentDetails = ShopifyPaymentDetailsHydrator::fromArray($data['paymentDetails']);
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
                $data['paymentDetails'] = ShopifyPaymentDetailsHydrator::toArray($this->paymentDetails);
            }
            return $data;
        }
}
