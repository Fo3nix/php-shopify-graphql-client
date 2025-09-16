<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsBankAccount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\BusinessEntity;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsPayoutSummary;

class ShopifyPaymentsPayout
{
    protected $bankAccount;
    protected $businessEntity;
    protected $gross;
    protected $id;
    protected $issuedAt;
    protected $legacyResourceId;
    protected $net;
    protected $status;
    protected $summary;
    protected $transactionType;

    
    /**
     * @return ShopifyPaymentsBankAccount
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    
    /**
     * @return BusinessEntity
     */
    public function getBusinessEntity()
    {
        return $this->businessEntity;
    }

    
    /**
     * @return MoneyV2
     */
    public function getGross()
    {
        return $this->gross;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return Carbon
     */
    public function getIssuedAt()
    {
        return $this->issuedAt;
    }

    
    /**
     * @return string
     */
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
    }

    
    /**
     * @return MoneyV2
     */
    public function getNet()
    {
        return $this->net;
    }

    
    /**
     * @return ShopifyPaymentsPayoutStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return ShopifyPaymentsPayoutSummary
     */
    public function getSummary()
    {
        return $this->summary;
    }

    
    /**
     * @return ShopifyPaymentsPayoutTransactionTypeEnumObject
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['bankAccount']) && $data['bankAccount'] !== null) {
                $instance->bankAccount = ShopifyPaymentsBankAccount::fromArray($data['bankAccount']);
            }
            if (isset($data['businessEntity']) && $data['businessEntity'] !== null) {
                $instance->businessEntity = BusinessEntity::fromArray($data['businessEntity']);
            }
            if (isset($data['gross']) && $data['gross'] !== null) {
                $instance->gross = MoneyV2::fromArray($data['gross']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['issuedAt']) && $data['issuedAt'] !== null) {
                $instance->issuedAt = new Carbon($data['issuedAt']);
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['net']) && $data['net'] !== null) {
                $instance->net = MoneyV2::fromArray($data['net']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['summary']) && $data['summary'] !== null) {
                $instance->summary = ShopifyPaymentsPayoutSummary::fromArray($data['summary']);
            }
            if (isset($data['transactionType']) && $data['transactionType'] !== null) {
                $instance->transactionType = $data['transactionType'];
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
            if ($this->bankAccount !== null) {
                $data['bankAccount'] = $this->bankAccount->asArray();
            }
            if ($this->businessEntity !== null) {
                $data['businessEntity'] = $this->businessEntity->asArray();
            }
            if ($this->gross !== null) {
                $data['gross'] = $this->gross->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->issuedAt !== null) {
                $data['issuedAt'] = $this->issuedAt->toIso8601String();
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->net !== null) {
                $data['net'] = $this->net->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->summary !== null) {
                $data['summary'] = $this->summary->asArray();
            }
            if ($this->transactionType !== null) {
                $data['transactionType'] = $this->transactionType;
            }
            return $data;
        }
}
