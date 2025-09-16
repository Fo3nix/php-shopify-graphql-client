<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionBillingAttemptConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionBillingCycleEditedContract;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionContract;

class SubscriptionBillingCycle
{
    protected $billingAttemptExpectedDate;
    protected $billingAttempts;
    protected $cycleEndAt;
    protected $cycleIndex;
    protected $cycleStartAt;
    protected $edited;
    protected $editedContract;
    protected $skipped;
    protected $sourceContract;
    protected $status;

    
    /**
     * @return Carbon
     */
    public function getBillingAttemptExpectedDate()
    {
        return $this->billingAttemptExpectedDate;
    }

    
    /**
     * @return SubscriptionBillingAttemptConnection
     */
    public function getBillingAttempts()
    {
        return $this->billingAttempts;
    }

    
    /**
     * @return Carbon
     */
    public function getCycleEndAt()
    {
        return $this->cycleEndAt;
    }

    
    /**
     * @return int
     */
    public function getCycleIndex()
    {
        return $this->cycleIndex;
    }

    
    /**
     * @return Carbon
     */
    public function getCycleStartAt()
    {
        return $this->cycleStartAt;
    }

    
    /**
     * @return bool
     */
    public function getEdited()
    {
        return $this->edited;
    }

    
    /**
     * @return SubscriptionBillingCycleEditedContract
     */
    public function getEditedContract()
    {
        return $this->editedContract;
    }

    
    /**
     * @return bool
     */
    public function getSkipped()
    {
        return $this->skipped;
    }

    
    /**
     * @return SubscriptionContract
     */
    public function getSourceContract()
    {
        return $this->sourceContract;
    }

    
    /**
     * @return SubscriptionBillingCycleBillingCycleStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['billingAttemptExpectedDate']) && $data['billingAttemptExpectedDate'] !== null) {
                $instance->billingAttemptExpectedDate = new Carbon($data['billingAttemptExpectedDate']);
            }
            if (isset($data['billingAttempts']) && $data['billingAttempts'] !== null) {
                $instance->billingAttempts = SubscriptionBillingAttemptConnection::fromArray($data['billingAttempts']);
            }
            if (isset($data['cycleEndAt']) && $data['cycleEndAt'] !== null) {
                $instance->cycleEndAt = new Carbon($data['cycleEndAt']);
            }
            if (isset($data['cycleIndex']) && $data['cycleIndex'] !== null) {
                $instance->cycleIndex = $data['cycleIndex'];
            }
            if (isset($data['cycleStartAt']) && $data['cycleStartAt'] !== null) {
                $instance->cycleStartAt = new Carbon($data['cycleStartAt']);
            }
            if (isset($data['edited']) && $data['edited'] !== null) {
                $instance->edited = $data['edited'];
            }
            if (isset($data['editedContract']) && $data['editedContract'] !== null) {
                $instance->editedContract = SubscriptionBillingCycleEditedContract::fromArray($data['editedContract']);
            }
            if (isset($data['skipped']) && $data['skipped'] !== null) {
                $instance->skipped = $data['skipped'];
            }
            if (isset($data['sourceContract']) && $data['sourceContract'] !== null) {
                $instance->sourceContract = SubscriptionContract::fromArray($data['sourceContract']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->billingAttemptExpectedDate !== null) {
                $data['billingAttemptExpectedDate'] = $this->billingAttemptExpectedDate->toIso8601String();
            }
            if ($this->billingAttempts !== null) {
                $data['billingAttempts'] = $this->billingAttempts->asArray();
            }
            if ($this->cycleEndAt !== null) {
                $data['cycleEndAt'] = $this->cycleEndAt->toIso8601String();
            }
            if ($this->cycleIndex !== null) {
                $data['cycleIndex'] = $this->cycleIndex;
            }
            if ($this->cycleStartAt !== null) {
                $data['cycleStartAt'] = $this->cycleStartAt->toIso8601String();
            }
            if ($this->edited !== null) {
                $data['edited'] = $this->edited;
            }
            if ($this->editedContract !== null) {
                $data['editedContract'] = $this->editedContract->asArray();
            }
            if ($this->skipped !== null) {
                $data['skipped'] = $this->skipped;
            }
            if ($this->sourceContract !== null) {
                $data['sourceContract'] = $this->sourceContract->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            return $data;
        }
}
