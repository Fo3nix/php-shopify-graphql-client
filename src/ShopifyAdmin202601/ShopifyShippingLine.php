<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountAllocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyFulfillmentService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyTaxLine;

/**
 * The shipping method that customers select for an order. Includes pricing details, carrier information, and any applied discounts or taxes.
 */
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
     * A reference to the carrier service that provided the rate.
     * Present when the rate was computed by a third-party carrier service.
     *
     * @return string
     */
    public function getCarrierIdentifier(): ?string
    {
        return $this->carrierIdentifier;
    }

    
    /**
     * A reference to the shipping method.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    
    /**
     * The date and time when the shipping line was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The current shipping price after applying refunds, after applying discounts. If the parent `order.taxesIncluded`` field is true, then this price includes taxes. Otherwise, this field is the pre-tax price.
     *
     * @return ShopifyMoneyBag
     */
    public function getCurrentDiscountedPriceSet(): ?ShopifyMoneyBag
    {
        return $this->currentDiscountedPriceSet;
    }

    
    /**
     * Whether the shipping line is custom or not.
     *
     * @return bool
     */
    public function getCustom(): ?bool
    {
        return $this->custom;
    }

    
    /**
     * The general classification of the delivery method.
     *
     * @return string
     */
    public function getDeliveryCategory(): ?string
    {
        return $this->deliveryCategory;
    }

    
    /**
     * The discounts that have been allocated to the shipping line.
     *
     * @return ShopifyDiscountAllocation[]
     */
    public function getDiscountAllocations(): ?array
    {
        return $this->discountAllocations;
    }

    
    /**
     * The pre-tax shipping price with discounts applied.
     * As of API version 2024-07, this will be calculated including cart level discounts, such as the free shipping discount.
     *
     * @return ShopifyMoneyV2
     */
    public function getDiscountedPrice(): ?ShopifyMoneyV2
    {
        return $this->discountedPrice;
    }

    
    /**
     * The shipping price after applying discounts. If the parent order.taxesIncluded field is true, then this price includes taxes. If not, it's the pre-tax price.
     * As of API version 2024-07, this will be calculated including cart level discounts, such as the free shipping discount.
     *
     * @return ShopifyMoneyBag
     */
    public function getDiscountedPriceSet(): ?ShopifyMoneyBag
    {
        return $this->discountedPriceSet;
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
     * Whether the shipping line has been removed.
     *
     * @return bool
     */
    public function getIsRemoved(): ?bool
    {
        return $this->isRemoved;
    }

    
    /**
     * The shipping price without any discounts applied. If the parent order.taxesIncluded field is true, then this price includes taxes. Otherwise, this field is the pre-tax price.
     *
     * @return ShopifyMoneyV2
     */
    public function getOriginalPrice(): ?ShopifyMoneyV2
    {
        return $this->originalPrice;
    }

    
    /**
     * The shipping price without any discounts applied. If the parent order.taxesIncluded field is true, then this price includes taxes. Otherwise, this field is the pre-tax price.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->originalPriceSet;
    }

    
    /**
     * The phone number at the shipping address.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    
    /**
     * Returns the price of the shipping line.
     *
     * @return string
     */
    public function getPrice(): mixed
    {
        return $this->price;
    }

    
    /**
     * The fulfillment service requested for the shipping method.
     * Present if the shipping method requires processing by a third party fulfillment service.
     *
     * @return ShopifyFulfillmentService
     */
    public function getRequestedFulfillmentService(): ?ShopifyFulfillmentService
    {
        return $this->requestedFulfillmentService;
    }

    
    /**
     * A unique identifier for the shipping rate. The format can change without notice and isn't meant to be shown to users.
     *
     * @return string
     */
    public function getShippingRateHandle(): ?string
    {
        return $this->shippingRateHandle;
    }

    
    /**
     * Returns the rate source for the shipping line.
     *
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    
    /**
     * The TaxLine objects connected to this shipping line.
     *
     * @return ShopifyTaxLine[]
     */
    public function getTaxLines(): ?array
    {
        return $this->taxLines;
    }

    
    /**
     * Returns the title of the shipping line.
     *
     * @return string
     */
    public function getTitle(): ?string
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
