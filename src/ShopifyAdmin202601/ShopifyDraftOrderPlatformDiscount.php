<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDraftOrderPlatformDiscountAllocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountNode;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyBag;

/**
 * The platform discounts applied to the draft order.
 */
class ShopifyDraftOrderPlatformDiscount
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
     * Price reduction allocations across the draft order's lines.
     *
     * @return ShopifyDraftOrderPlatformDiscountAllocation[]
     */
    public function getAllocations(): ?array
    {
        return $this->allocations;
    }

    
    /**
     * Whether the discount is an automatic discount.
     *
     * @return bool
     */
    public function getAutomaticDiscount(): ?bool
    {
        return $this->automaticDiscount;
    }

    
    /**
     * Whether the discount is a buy x get y discount.
     *
     * @return bool
     */
    public function getBxgyDiscount(): ?bool
    {
        return $this->bxgyDiscount;
    }

    
    /**
     * If a code-based discount, the code used to add the discount.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    
    /**
     * The discount class.
     *
     * @return string A ShopifyDiscountClassEnumObject value
     */
    public function getDiscountClass(): ?string
    {
        return $this->discountClass;
    }

    
    /**
     * The discount classes.
     *
     * @return string[] ShopifyDiscountClassEnumObject values
     */
    public function getDiscountClasses(): ?array
    {
        return $this->discountClasses;
    }

    
    /**
     * The discount node for the platform discount.
     *
     * @return ShopifyDiscountNode
     */
    public function getDiscountNode(): ?ShopifyDiscountNode
    {
        return $this->discountNode;
    }

    
    /**
     * The ID of the discount.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Whether the discount is line, order or shipping level.
     *
     * @return string
     */
    public function getPresentationLevel(): ?string
    {
        return $this->presentationLevel;
    }

    
    /**
     * The short summary of the discount.
     *
     * @return string
     */
    public function getShortSummary(): ?string
    {
        return $this->shortSummary;
    }

    
    /**
     * The summary of the discount.
     *
     * @return string
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    
    /**
     * The name of the discount.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The discount total amount in shop currency.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalAmount(): ?ShopifyMoneyV2
    {
        return $this->totalAmount;
    }

    
    /**
     * The amount of money discounted, with values shown in both shop currency and presentment currency.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalAmountPriceSet(): ?ShopifyMoneyBag
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
                $instance->allocations = array_map(function($item) { return ShopifyDraftOrderPlatformDiscountAllocation::fromArray($item); }, $data['allocations']);
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
                $instance->discountNode = ShopifyDiscountNode::fromArray($data['discountNode']);
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
                $instance->totalAmount = ShopifyMoneyV2::fromArray($data['totalAmount']);
            }
            if (isset($data['totalAmountPriceSet']) && $data['totalAmountPriceSet'] !== null) {
                $instance->totalAmountPriceSet = ShopifyMoneyBag::fromArray($data['totalAmountPriceSet']);
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
