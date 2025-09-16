<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountCombinesWith;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountCustomerBuys;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountCustomerGets;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\EventConnection;

class DiscountAutomaticBxgy
{
    protected $asyncUsageCount;
    protected $combinesWith;
    protected $createdAt;
    protected $customerBuys;
    protected $customerGets;
    protected $discountClass;
    protected $discountClasses;
    protected $endsAt;
    protected $events;
    protected $id;
    protected $startsAt;
    protected $status;
    protected $summary;
    protected $title;
    protected $updatedAt;
    protected $usageCount;
    protected $usesPerOrderLimit;

    
    /**
     * @return int
     */
    public function getAsyncUsageCount()
    {
        return $this->asyncUsageCount;
    }

    
    /**
     * @return DiscountCombinesWith
     */
    public function getCombinesWith()
    {
        return $this->combinesWith;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return DiscountCustomerBuys
     */
    public function getCustomerBuys()
    {
        return $this->customerBuys;
    }

    
    /**
     * @return DiscountCustomerGets
     */
    public function getCustomerGets()
    {
        return $this->customerGets;
    }

    
    /**
     * @return MerchandiseDiscountClassEnumObject
     */
    public function getDiscountClass()
    {
        return $this->discountClass;
    }

    
    /**
     * @return DiscountClassEnumObject[]
     */
    public function getDiscountClasses()
    {
        return $this->discountClasses;
    }

    
    /**
     * @return Carbon
     */
    public function getEndsAt()
    {
        return $this->endsAt;
    }

    
    /**
     * @return EventConnection
     */
    public function getEvents()
    {
        return $this->events;
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
    public function getStartsAt()
    {
        return $this->startsAt;
    }

    
    /**
     * @return DiscountStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    
    /**
     * @return int
     */
    public function getUsageCount()
    {
        return $this->usageCount;
    }

    
    /**
     * @return int
     */
    public function getUsesPerOrderLimit()
    {
        return $this->usesPerOrderLimit;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['asyncUsageCount']) && $data['asyncUsageCount'] !== null) {
                $instance->asyncUsageCount = $data['asyncUsageCount'];
            }
            if (isset($data['combinesWith']) && $data['combinesWith'] !== null) {
                $instance->combinesWith = DiscountCombinesWith::fromArray($data['combinesWith']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['customerBuys']) && $data['customerBuys'] !== null) {
                $instance->customerBuys = DiscountCustomerBuys::fromArray($data['customerBuys']);
            }
            if (isset($data['customerGets']) && $data['customerGets'] !== null) {
                $instance->customerGets = DiscountCustomerGets::fromArray($data['customerGets']);
            }
            if (isset($data['discountClass']) && $data['discountClass'] !== null) {
                $instance->discountClass = $data['discountClass'];
            }
            if (isset($data['discountClasses']) && $data['discountClasses'] !== null) {
                $instance->discountClasses = $data['discountClasses'];
            }
            if (isset($data['endsAt']) && $data['endsAt'] !== null) {
                $instance->endsAt = new Carbon($data['endsAt']);
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = EventConnection::fromArray($data['events']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['startsAt']) && $data['startsAt'] !== null) {
                $instance->startsAt = new Carbon($data['startsAt']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['summary']) && $data['summary'] !== null) {
                $instance->summary = $data['summary'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['usageCount']) && $data['usageCount'] !== null) {
                $instance->usageCount = $data['usageCount'];
            }
            if (isset($data['usesPerOrderLimit']) && $data['usesPerOrderLimit'] !== null) {
                $instance->usesPerOrderLimit = $data['usesPerOrderLimit'];
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
            if ($this->asyncUsageCount !== null) {
                $data['asyncUsageCount'] = $this->asyncUsageCount;
            }
            if ($this->combinesWith !== null) {
                $data['combinesWith'] = $this->combinesWith->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->customerBuys !== null) {
                $data['customerBuys'] = $this->customerBuys->asArray();
            }
            if ($this->customerGets !== null) {
                $data['customerGets'] = $this->customerGets->asArray();
            }
            if ($this->discountClass !== null) {
                $data['discountClass'] = $this->discountClass;
            }
            if ($this->discountClasses !== null) {
                $data['discountClasses'] = $this->discountClasses;
            }
            if ($this->endsAt !== null) {
                $data['endsAt'] = $this->endsAt->toIso8601String();
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->startsAt !== null) {
                $data['startsAt'] = $this->startsAt->toIso8601String();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->summary !== null) {
                $data['summary'] = $this->summary;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->usageCount !== null) {
                $data['usageCount'] = $this->usageCount;
            }
            if ($this->usesPerOrderLimit !== null) {
                $data['usesPerOrderLimit'] = $this->usesPerOrderLimit;
            }
            return $data;
        }
}
