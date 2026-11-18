<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPaymentTerms;

/**
 * Represents the payment schedule for a single payment defined in the payment terms.
 */
class ShopifyPaymentSchedule implements ShopifyNode
{
    protected $amount;
    protected $balanceDue;
    protected $completedAt;
    protected $due;
    protected $dueAt;
    protected $id;
    protected $issuedAt;
    protected $paymentTerms;
    protected $totalBalance;

    
    /**
     * Amount owed for this payment schedule.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmount(): ?ShopifyMoneyV2
    {
        return $this->amount;
    }

    
    /**
     * Remaining balance to be captured for this payment schedule.
     *
     * @return ShopifyMoneyV2
     */
    public function getBalanceDue(): ?ShopifyMoneyV2
    {
        return $this->balanceDue;
    }

    
    /**
     * Date and time when the payment schedule is paid or fulfilled.
     *
     * @return Carbon
     */
    public function getCompletedAt(): ?Carbon
    {
        return $this->completedAt;
    }

    
    /**
     * Whether the payment schedule is due.
     *
     * @return bool
     */
    public function getDue(): ?bool
    {
        return $this->due;
    }

    
    /**
     * Date and time when the payment schedule is due.
     *
     * @return Carbon
     */
    public function getDueAt(): ?Carbon
    {
        return $this->dueAt;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Date and time when the invoice is sent.
     *
     * @return Carbon
     */
    public function getIssuedAt(): ?Carbon
    {
        return $this->issuedAt;
    }

    
    /**
     * The payment terms the payment schedule belongs to.
     *
     * @return ShopifyPaymentTerms
     */
    public function getPaymentTerms(): ?ShopifyPaymentTerms
    {
        return $this->paymentTerms;
    }

    
    /**
     * Remaining balance to be paid or authorized by the customer for this payment schedule.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalBalance(): ?ShopifyMoneyV2
    {
        return $this->totalBalance;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = ShopifyMoneyV2::fromArray($data['amount']);
            }
            if (isset($data['balanceDue']) && $data['balanceDue'] !== null) {
                $instance->balanceDue = ShopifyMoneyV2::fromArray($data['balanceDue']);
            }
            if (isset($data['completedAt']) && $data['completedAt'] !== null) {
                $instance->completedAt = new Carbon($data['completedAt']);
            }
            if (isset($data['due']) && $data['due'] !== null) {
                $instance->due = $data['due'];
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
                $instance->paymentTerms = ShopifyPaymentTerms::fromArray($data['paymentTerms']);
            }
            if (isset($data['totalBalance']) && $data['totalBalance'] !== null) {
                $instance->totalBalance = ShopifyMoneyV2::fromArray($data['totalBalance']);
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
            if ($this->balanceDue !== null) {
                $data['balanceDue'] = $this->balanceDue->asArray();
            }
            if ($this->completedAt !== null) {
                $data['completedAt'] = $this->completedAt->toIso8601String();
            }
            if ($this->due !== null) {
                $data['due'] = $this->due;
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
            if ($this->totalBalance !== null) {
                $data['totalBalance'] = $this->totalBalance->asArray();
            }
            return $data;
        }
}
