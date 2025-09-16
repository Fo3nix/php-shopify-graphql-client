<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DraftOrderPlatformDiscountAllocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountNode;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;

class DraftOrderPlatformDiscount
{
    protected $allocations;
    protected $automaticDiscount;
    protected $bxgyDiscount;
    protected $code;
    protected $discountClass;
    protected $discountClasses;
    protected $discountNode;
    protected $id;
    protected $presentationLevel;
    protected $shortSummary;
    protected $summary;
    protected $title;
    protected $totalAmount;
    protected $totalAmountPriceSet;

    
    /**
     * @return DraftOrderPlatformDiscountAllocation[]
     */
    public function getAllocations()
    {
        return $this->allocations;
    }

    
    /**
     * @return bool
     */
    public function getAutomaticDiscount()
    {
        return $this->automaticDiscount;
    }

    
    /**
     * @return bool
     */
    public function getBxgyDiscount()
    {
        return $this->bxgyDiscount;
    }

    
    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    
    /**
     * @return DiscountClassEnumObject
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
     * @return DiscountNode
     */
    public function getDiscountNode()
    {
        return $this->discountNode;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getPresentationLevel()
    {
        return $this->presentationLevel;
    }

    
    /**
     * @return string
     */
    public function getShortSummary()
    {
        return $this->shortSummary;
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
     * @return MoneyV2
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalAmountPriceSet()
    {
        return $this->totalAmountPriceSet;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['allocations']) && $data['allocations'] !== null) {
                $instance->allocations = array_map(function($item) { return DraftOrderPlatformDiscountAllocation::fromArray($item); }, $data['allocations']);
            }
            if (isset($data['automaticDiscount']) && $data['automaticDiscount'] !== null) {
                $instance->automaticDiscount = $data['automaticDiscount'];
            }
            if (isset($data['bxgyDiscount']) && $data['bxgyDiscount'] !== null) {
                $instance->bxgyDiscount = $data['bxgyDiscount'];
            }
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['discountClass']) && $data['discountClass'] !== null) {
                $instance->discountClass = $data['discountClass'];
            }
            if (isset($data['discountClasses']) && $data['discountClasses'] !== null) {
                $instance->discountClasses = $data['discountClasses'];
            }
            if (isset($data['discountNode']) && $data['discountNode'] !== null) {
                $instance->discountNode = DiscountNode::fromArray($data['discountNode']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['presentationLevel']) && $data['presentationLevel'] !== null) {
                $instance->presentationLevel = $data['presentationLevel'];
            }
            if (isset($data['shortSummary']) && $data['shortSummary'] !== null) {
                $instance->shortSummary = $data['shortSummary'];
            }
            if (isset($data['summary']) && $data['summary'] !== null) {
                $instance->summary = $data['summary'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['totalAmount']) && $data['totalAmount'] !== null) {
                $instance->totalAmount = MoneyV2::fromArray($data['totalAmount']);
            }
            if (isset($data['totalAmountPriceSet']) && $data['totalAmountPriceSet'] !== null) {
                $instance->totalAmountPriceSet = MoneyBag::fromArray($data['totalAmountPriceSet']);
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
            if ($this->allocations !== null) {
                $data['allocations'] = array_map(function($item) { return $item->asArray(); }, $this->allocations);
            }
            if ($this->automaticDiscount !== null) {
                $data['automaticDiscount'] = $this->automaticDiscount;
            }
            if ($this->bxgyDiscount !== null) {
                $data['bxgyDiscount'] = $this->bxgyDiscount;
            }
            if ($this->code !== null) {
                $data['code'] = $this->code;
            }
            if ($this->discountClass !== null) {
                $data['discountClass'] = $this->discountClass;
            }
            if ($this->discountClasses !== null) {
                $data['discountClasses'] = $this->discountClasses;
            }
            if ($this->discountNode !== null) {
                $data['discountNode'] = $this->discountNode->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->presentationLevel !== null) {
                $data['presentationLevel'] = $this->presentationLevel;
            }
            if ($this->shortSummary !== null) {
                $data['shortSummary'] = $this->shortSummary;
            }
            if ($this->summary !== null) {
                $data['summary'] = $this->summary;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->totalAmount !== null) {
                $data['totalAmount'] = $this->totalAmount->asArray();
            }
            if ($this->totalAmountPriceSet !== null) {
                $data['totalAmountPriceSet'] = $this->totalAmountPriceSet->asArray();
            }
            return $data;
        }
}
