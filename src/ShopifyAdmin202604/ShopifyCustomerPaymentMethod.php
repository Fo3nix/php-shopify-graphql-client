<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerPaymentInstrumentHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPaymentMandateResourceConnection;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionContractConnection;

/**
 * A customer's saved payment method. Stores the payment instrument details and billing information for recurring charges.
 *
 * The payment method supports types included in the [`CustomerPaymentInstrument`](https://shopify.dev/docs/api/admin-graphql/latest/unions/CustomerPaymentInstrument) union.
 */
class ShopifyCustomerPaymentMethod implements ShopifyNode
{
    protected $customer;
    protected $id;
    protected $instrument;
    protected $mandates;
    protected $revokedAt;
    protected $revokedReason;
    protected $subscriptionContracts;

    
    /**
     * The customer to whom the payment method belongs.
     *
     * @return ShopifyCustomer
     */
    public function getCustomer(): ?ShopifyCustomer
    {
        return $this->customer;
    }

    
    /**
     * The ID of this payment method.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The instrument for this payment method.
     *
     * @return ShopifyBankAccount|ShopifyCustomerCreditCard|ShopifyCustomerPaypalBillingAgreement|ShopifyCustomerShopPayAgreement
     */
    public function getInstrument(): ShopifyBankAccount|ShopifyCustomerCreditCard|ShopifyCustomerPaypalBillingAgreement|ShopifyCustomerShopPayAgreement|null
    {
        return $this->instrument;
    }

    
    /**
     * The mandates associated with the payment method.
     *
     * @return ShopifyPaymentMandateResourceConnection
     */
    public function getMandates(): ?ShopifyPaymentMandateResourceConnection
    {
        return $this->mandates;
    }

    
    /**
     * The time that the payment method was revoked.
     *
     * @return Carbon
     */
    public function getRevokedAt(): ?Carbon
    {
        return $this->revokedAt;
    }

    
    /**
     * The revocation reason for this payment method.
     *
     * @return string A ShopifyCustomerPaymentMethodRevocationReasonEnumObject value
     */
    public function getRevokedReason(): ?string
    {
        return $this->revokedReason;
    }

    
    /**
     * List Subscription Contracts.
     *
     * @return ShopifySubscriptionContractConnection
     */
    public function getSubscriptionContracts(): ?ShopifySubscriptionContractConnection
    {
        return $this->subscriptionContracts;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = ShopifyCustomer::fromArray($data['customer']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['instrument']) && $data['instrument'] !== null) {
                $instance->instrument = ShopifyCustomerPaymentInstrumentHydrator::fromArray($data['instrument']);
            }
            if (isset($data['mandates']) && $data['mandates'] !== null) {
                $instance->mandates = ShopifyPaymentMandateResourceConnection::fromArray($data['mandates']);
            }
            if (isset($data['revokedAt']) && $data['revokedAt'] !== null) {
                $instance->revokedAt = new Carbon($data['revokedAt']);
            }
            if (isset($data['revokedReason']) && $data['revokedReason'] !== null) {
                $instance->revokedReason = $data['revokedReason'];
            }
            if (isset($data['subscriptionContracts']) && $data['subscriptionContracts'] !== null) {
                $instance->subscriptionContracts = ShopifySubscriptionContractConnection::fromArray($data['subscriptionContracts']);
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
            if ($this->customer !== null) {
                $data['customer'] = $this->customer->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->instrument !== null) {
                $data['instrument'] = ShopifyCustomerPaymentInstrumentHydrator::toArray($this->instrument);
            }
            if ($this->mandates !== null) {
                $data['mandates'] = $this->mandates->asArray();
            }
            if ($this->revokedAt !== null) {
                $data['revokedAt'] = $this->revokedAt->toIso8601String();
            }
            if ($this->revokedReason !== null) {
                $data['revokedReason'] = $this->revokedReason;
            }
            if ($this->subscriptionContracts !== null) {
                $data['subscriptionContracts'] = $this->subscriptionContracts->asArray();
            }
            return $data;
        }
}
