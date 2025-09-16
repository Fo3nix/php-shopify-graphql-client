<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PaymentTerms;

class PaymentSchedule
{
    protected $amount;
    protected $completedAt;
    protected $dueAt;
    protected $id;
    protected $issuedAt;
    protected $paymentTerms;

    
    /**
     * @return MoneyV2
     */
    public function getAmount()
    {
        return $this->amount;
    }

    
    /**
     * @return Carbon
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    
    /**
     * @return Carbon
     */
    public function getDueAt()
    {
        return $this->dueAt;
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
     * @return PaymentTerms
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = MoneyV2::fromArray($data['amount']);
            }
            if (isset($data['completedAt']) && $data['completedAt'] !== null) {
                $instance->completedAt = new Carbon($data['completedAt']);
            }
            if (isset($data['dueAt']) && $data['dueAt'] !== null) {
                $instance->dueAt = new Carbon($data['dueAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['issuedAt']) && $data['issuedAt'] !== null) {
                $instance->issuedAt = new Carbon($data['issuedAt']);
            }
            if (isset($data['paymentTerms']) && $data['paymentTerms'] !== null) {
                $instance->paymentTerms = PaymentTerms::fromArray($data['paymentTerms']);
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
            if ($this->amount !== null) {
                $data['amount'] = $this->amount->asArray();
            }
            if ($this->completedAt !== null) {
                $data['completedAt'] = $this->completedAt->toIso8601String();
            }
            if ($this->dueAt !== null) {
                $data['dueAt'] = $this->dueAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->issuedAt !== null) {
                $data['issuedAt'] = $this->issuedAt->toIso8601String();
            }
            if ($this->paymentTerms !== null) {
                $data['paymentTerms'] = $this->paymentTerms->asArray();
            }
            return $data;
        }
}
