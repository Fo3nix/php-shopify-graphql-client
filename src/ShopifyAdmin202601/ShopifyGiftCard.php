<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyGiftCardRecipient;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyGiftCardTransactionConnection;

class ShopifyGiftCard
{
    protected $balance;
    protected $createdAt;
    protected $customer;
    protected $deactivatedAt;
    protected $enabled;
    protected $expiresOn;
    protected $id;
    protected $initialValue;
    protected $lastCharacters;
    protected $maskedCode;
    protected $note;
    protected $order;
    protected $recipientAttributes;
    protected $templateSuffix;
    protected $transactions;
    protected $updatedAt;

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getBalance()
    {
        return $this->balance;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return ShopifyCustomer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    
    /**
     * @return Carbon
     */
    public function getDeactivatedAt()
    {
        return $this->deactivatedAt;
    }

    
    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    
    /**
     * @return Carbon
     */
    public function getExpiresOn()
    {
        return $this->expiresOn;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getInitialValue()
    {
        return $this->initialValue;
    }

    
    /**
     * @return string
     */
    public function getLastCharacters()
    {
        return $this->lastCharacters;
    }

    
    /**
     * @return string
     */
    public function getMaskedCode()
    {
        return $this->maskedCode;
    }

    
    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    
    /**
     * @return ShopifyOrder
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return ShopifyGiftCardRecipient
     */
    public function getRecipientAttributes()
    {
        return $this->recipientAttributes;
    }

    
    /**
     * @return string
     */
    public function getTemplateSuffix()
    {
        return $this->templateSuffix;
    }

    
    /**
     * @return ShopifyGiftCardTransactionConnection
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['balance']) && $data['balance'] !== null) {
                $instance->balance = ShopifyMoneyV2::fromArray($data['balance']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = ShopifyCustomer::fromArray($data['customer']);
            }
            if (isset($data['deactivatedAt']) && $data['deactivatedAt'] !== null) {
                $instance->deactivatedAt = new Carbon($data['deactivatedAt']);
            }
            if (isset($data['enabled']) && $data['enabled'] !== null) {
                $instance->enabled = $data['enabled'];
            }
            if (isset($data['expiresOn']) && $data['expiresOn'] !== null) {
                $instance->expiresOn = new Carbon($data['expiresOn']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['initialValue']) && $data['initialValue'] !== null) {
                $instance->initialValue = ShopifyMoneyV2::fromArray($data['initialValue']);
            }
            if (isset($data['lastCharacters']) && $data['lastCharacters'] !== null) {
                $instance->lastCharacters = $data['lastCharacters'];
            }
            if (isset($data['maskedCode']) && $data['maskedCode'] !== null) {
                $instance->maskedCode = $data['maskedCode'];
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = ShopifyOrder::fromArray($data['order']);
            }
            if (isset($data['recipientAttributes']) && $data['recipientAttributes'] !== null) {
                $instance->recipientAttributes = ShopifyGiftCardRecipient::fromArray($data['recipientAttributes']);
            }
            if (isset($data['templateSuffix']) && $data['templateSuffix'] !== null) {
                $instance->templateSuffix = $data['templateSuffix'];
            }
            if (isset($data['transactions']) && $data['transactions'] !== null) {
                $instance->transactions = ShopifyGiftCardTransactionConnection::fromArray($data['transactions']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->balance !== null) {
                $data['balance'] = $this->balance->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->customer !== null) {
                $data['customer'] = $this->customer->asArray();
            }
            if ($this->deactivatedAt !== null) {
                $data['deactivatedAt'] = $this->deactivatedAt->toIso8601String();
            }
            if ($this->enabled !== null) {
                $data['enabled'] = $this->enabled;
            }
            if ($this->expiresOn !== null) {
                $data['expiresOn'] = $this->expiresOn->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->initialValue !== null) {
                $data['initialValue'] = $this->initialValue->asArray();
            }
            if ($this->lastCharacters !== null) {
                $data['lastCharacters'] = $this->lastCharacters;
            }
            if ($this->maskedCode !== null) {
                $data['maskedCode'] = $this->maskedCode;
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->recipientAttributes !== null) {
                $data['recipientAttributes'] = $this->recipientAttributes->asArray();
            }
            if ($this->templateSuffix !== null) {
                $data['templateSuffix'] = $this->templateSuffix;
            }
            if ($this->transactions !== null) {
                $data['transactions'] = $this->transactions->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
