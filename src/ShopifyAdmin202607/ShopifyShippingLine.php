<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountAllocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFulfillmentService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTaxLine;

class ShopifyShippingLine
{
    protected $carrierIdentifier;
    protected $code;
    protected $createdAt;
    protected $currentDiscountedPriceSet;
    protected $custom;
    protected $deliveryCategory;
    protected $discountAllocations;
    protected $discountedPrice;
    protected $discountedPriceSet;
    protected $id;
    protected $isRemoved;
    protected $originalPrice;
    protected $originalPriceSet;
    protected $phone;
    protected $price;
    protected $requestedFulfillmentService;
    protected $shippingRateHandle;
    protected $source;
    protected $taxLines;
    protected $title;

    
    /**
     * @return string
     */
    public function getCarrierIdentifier()
    {
        return $this->carrierIdentifier;
    }

    
    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getCurrentDiscountedPriceSet()
    {
        return $this->currentDiscountedPriceSet;
    }

    
    /**
     * @return bool
     */
    public function getCustom()
    {
        return $this->custom;
    }

    
    /**
     * @return string
     */
    public function getDeliveryCategory()
    {
        return $this->deliveryCategory;
    }

    
    /**
     * @return ShopifyDiscountAllocation[]
     */
    public function getDiscountAllocations()
    {
        return $this->discountAllocations;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getDiscountedPrice()
    {
        return $this->discountedPrice;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getDiscountedPriceSet()
    {
        return $this->discountedPriceSet;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return bool
     */
    public function getIsRemoved()
    {
        return $this->isRemoved;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getOriginalPrice()
    {
        return $this->originalPrice;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getOriginalPriceSet()
    {
        return $this->originalPriceSet;
    }

    
    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    
    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    
    /**
     * @return ShopifyFulfillmentService
     */
    public function getRequestedFulfillmentService()
    {
        return $this->requestedFulfillmentService;
    }

    
    /**
     * @return string
     */
    public function getShippingRateHandle()
    {
        return $this->shippingRateHandle;
    }

    
    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    
    /**
     * @return ShopifyTaxLine[]
     */
    public function getTaxLines()
    {
        return $this->taxLines;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['carrierIdentifier']) && $data['carrierIdentifier'] !== null) {
                $instance->carrierIdentifier = $data['carrierIdentifier'];
            }
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currentDiscountedPriceSet']) && $data['currentDiscountedPriceSet'] !== null) {
                $instance->currentDiscountedPriceSet = ShopifyMoneyBag::fromArray($data['currentDiscountedPriceSet']);
            }
            if (isset($data['custom']) && $data['custom'] !== null) {
                $instance->custom = $data['custom'];
            }
            if (isset($data['deliveryCategory']) && $data['deliveryCategory'] !== null) {
                $instance->deliveryCategory = $data['deliveryCategory'];
            }
            if (isset($data['discountAllocations']) && $data['discountAllocations'] !== null) {
                $instance->discountAllocations = array_map(function($item) { return ShopifyDiscountAllocation::fromArray($item); }, $data['discountAllocations']);
            }
            if (isset($data['discountedPrice']) && $data['discountedPrice'] !== null) {
                $instance->discountedPrice = ShopifyMoneyV2::fromArray($data['discountedPrice']);
            }
            if (isset($data['discountedPriceSet']) && $data['discountedPriceSet'] !== null) {
                $instance->discountedPriceSet = ShopifyMoneyBag::fromArray($data['discountedPriceSet']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['isRemoved']) && $data['isRemoved'] !== null) {
                $instance->isRemoved = $data['isRemoved'];
            }
            if (isset($data['originalPrice']) && $data['originalPrice'] !== null) {
                $instance->originalPrice = ShopifyMoneyV2::fromArray($data['originalPrice']);
            }
            if (isset($data['originalPriceSet']) && $data['originalPriceSet'] !== null) {
                $instance->originalPriceSet = ShopifyMoneyBag::fromArray($data['originalPriceSet']);
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = $data['price'];
            }
            if (isset($data['requestedFulfillmentService']) && $data['requestedFulfillmentService'] !== null) {
                $instance->requestedFulfillmentService = ShopifyFulfillmentService::fromArray($data['requestedFulfillmentService']);
            }
            if (isset($data['shippingRateHandle']) && $data['shippingRateHandle'] !== null) {
                $instance->shippingRateHandle = $data['shippingRateHandle'];
            }
            if (isset($data['source']) && $data['source'] !== null) {
                $instance->source = $data['source'];
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return ShopifyTaxLine::fromArray($item); }, $data['taxLines']);
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
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
            if ($this->carrierIdentifier !== null) {
                $data['carrierIdentifier'] = $this->carrierIdentifier;
            }
            if ($this->code !== null) {
                $data['code'] = $this->code;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->currentDiscountedPriceSet !== null) {
                $data['currentDiscountedPriceSet'] = $this->currentDiscountedPriceSet->asArray();
            }
            if ($this->custom !== null) {
                $data['custom'] = $this->custom;
            }
            if ($this->deliveryCategory !== null) {
                $data['deliveryCategory'] = $this->deliveryCategory;
            }
            if ($this->discountAllocations !== null) {
                $data['discountAllocations'] = array_map(function($item) { return $item->asArray(); }, $this->discountAllocations);
            }
            if ($this->discountedPrice !== null) {
                $data['discountedPrice'] = $this->discountedPrice->asArray();
            }
            if ($this->discountedPriceSet !== null) {
                $data['discountedPriceSet'] = $this->discountedPriceSet->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->isRemoved !== null) {
                $data['isRemoved'] = $this->isRemoved;
            }
            if ($this->originalPrice !== null) {
                $data['originalPrice'] = $this->originalPrice->asArray();
            }
            if ($this->originalPriceSet !== null) {
                $data['originalPriceSet'] = $this->originalPriceSet->asArray();
            }
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->price !== null) {
                $data['price'] = $this->price;
            }
            if ($this->requestedFulfillmentService !== null) {
                $data['requestedFulfillmentService'] = $this->requestedFulfillmentService->asArray();
            }
            if ($this->shippingRateHandle !== null) {
                $data['shippingRateHandle'] = $this->shippingRateHandle;
            }
            if ($this->source !== null) {
                $data['source'] = $this->source;
            }
            if ($this->taxLines !== null) {
                $data['taxLines'] = array_map(function($item) { return $item->asArray(); }, $this->taxLines);
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
