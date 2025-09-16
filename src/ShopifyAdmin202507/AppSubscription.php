<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AppSubscriptionLineItem;

class AppSubscription
{
    protected $createdAt;
    protected $currentPeriodEnd;
    protected $id;
    protected $lineItems;
    protected $name;
    protected $returnUrl;
    protected $status;
    protected $test;
    protected $trialDays;

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return Carbon
     */
    public function getCurrentPeriodEnd()
    {
        return $this->currentPeriodEnd;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return AppSubscriptionLineItem[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    
    /**
     * @return AppSubscriptionStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return bool
     */
    public function getTest()
    {
        return $this->test;
    }

    
    /**
     * @return int
     */
    public function getTrialDays()
    {
        return $this->trialDays;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currentPeriodEnd']) && $data['currentPeriodEnd'] !== null) {
                $instance->currentPeriodEnd = new Carbon($data['currentPeriodEnd']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = array_map(function($item) { return AppSubscriptionLineItem::fromArray($item); }, $data['lineItems']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['returnUrl']) && $data['returnUrl'] !== null) {
                $instance->returnUrl = $data['returnUrl'];
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['test']) && $data['test'] !== null) {
                $instance->test = $data['test'];
            }
            if (isset($data['trialDays']) && $data['trialDays'] !== null) {
                $instance->trialDays = $data['trialDays'];
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->currentPeriodEnd !== null) {
                $data['currentPeriodEnd'] = $this->currentPeriodEnd->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = array_map(function($item) { return $item->asArray(); }, $this->lineItems);
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->returnUrl !== null) {
                $data['returnUrl'] = $this->returnUrl;
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->test !== null) {
                $data['test'] = $this->test;
            }
            if ($this->trialDays !== null) {
                $data['trialDays'] = $this->trialDays;
            }
            return $data;
        }
}
