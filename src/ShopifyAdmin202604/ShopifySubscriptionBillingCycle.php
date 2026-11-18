<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionBillingAttemptConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionBillingCycleEditedContract;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionContract;

/**
 * A subscription billing cycle.
 */
class ShopifySubscriptionBillingCycle
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
     * The date on which the billing attempt is expected to be made.
     *
     * @return Carbon
     */
    public function getBillingAttemptExpectedDate(): ?Carbon
    {
        return $this->billingAttemptExpectedDate;
    }

    
    /**
     * The list of billing attempts associated with the billing cycle.
     *
     * @return ShopifySubscriptionBillingAttemptConnection
     */
    public function getBillingAttempts(): ?ShopifySubscriptionBillingAttemptConnection
    {
        return $this->billingAttempts;
    }

    
    /**
     * The end date of the billing cycle.
     *
     * @return Carbon
     */
    public function getCycleEndAt(): ?Carbon
    {
        return $this->cycleEndAt;
    }

    
    /**
     * The index of the billing cycle.
     *
     * @return int
     */
    public function getCycleIndex(): ?int
    {
        return $this->cycleIndex;
    }

    
    /**
     * The start date of the billing cycle.
     *
     * @return Carbon
     */
    public function getCycleStartAt(): ?Carbon
    {
        return $this->cycleStartAt;
    }

    
    /**
     * Whether this billing cycle was edited.
     *
     * @return bool
     */
    public function getEdited(): ?bool
    {
        return $this->edited;
    }

    
    /**
     * The active edited contract for the billing cycle.
     *
     * @return ShopifySubscriptionBillingCycleEditedContract
     */
    public function getEditedContract(): ?ShopifySubscriptionBillingCycleEditedContract
    {
        return $this->editedContract;
    }

    
    /**
     * Whether this billing cycle was skipped.
     *
     * @return bool
     */
    public function getSkipped(): ?bool
    {
        return $this->skipped;
    }

    
    /**
     * The subscription contract that the billing cycle belongs to.
     *
     * @return ShopifySubscriptionContract
     */
    public function getSourceContract(): ?ShopifySubscriptionContract
    {
        return $this->sourceContract;
    }

    
    /**
     * The status of the billing cycle.
     *
     * @return string A ShopifySubscriptionBillingCycleBillingCycleStatusEnumObject value
     */
    public function getStatus(): ?string
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
                $instance->billingAttempts = ShopifySubscriptionBillingAttemptConnection::fromArray($data['billingAttempts']);
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
                $instance->editedContract = ShopifySubscriptionBillingCycleEditedContract::fromArray($data['editedContract']);
            }
            if (isset($data['skipped']) && $data['skipped'] !== null) {
                $instance->skipped = $data['skipped'];
            }
            if (isset($data['sourceContract']) && $data['sourceContract'] !== null) {
                $instance->sourceContract = ShopifySubscriptionContract::fromArray($data['sourceContract']);
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
