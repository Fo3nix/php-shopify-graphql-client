<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Customer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerPaymentInstrument;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionContractConnection;

class CustomerPaymentMethod
{
    protected $customer;
    protected $id;
    protected $instrument;
    protected $revokedAt;
    protected $revokedReason;
    protected $subscriptionContracts;

    
    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return CustomerPaymentInstrument
     */
    public function getInstrument()
    {
        return $this->instrument;
    }

    
    /**
     * @return Carbon
     */
    public function getRevokedAt()
    {
        return $this->revokedAt;
    }

    
    /**
     * @return CustomerPaymentMethodRevocationReasonEnumObject
     */
    public function getRevokedReason()
    {
        return $this->revokedReason;
    }

    
    /**
     * @return SubscriptionContractConnection
     */
    public function getSubscriptionContracts()
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
                $instance->customer = Customer::fromArray($data['customer']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['instrument']) && $data['instrument'] !== null) {
                $instance->instrument = CustomerPaymentInstrument::fromArray($data['instrument']);
            }
            if (isset($data['revokedAt']) && $data['revokedAt'] !== null) {
                $instance->revokedAt = new Carbon($data['revokedAt']);
            }
            if (isset($data['revokedReason']) && $data['revokedReason'] !== null) {
                $instance->revokedReason = $data['revokedReason'];
            }
            if (isset($data['subscriptionContracts']) && $data['subscriptionContracts'] !== null) {
                $instance->subscriptionContracts = SubscriptionContractConnection::fromArray($data['subscriptionContracts']);
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
                $data['instrument'] = $this->instrument->asArray();
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
