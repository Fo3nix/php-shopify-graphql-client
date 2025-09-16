<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionContract;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Attribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountAllocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Duty;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Image;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LineItemGroup;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Product;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LineItemSellingPlan;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\TaxLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductVariant;

class LineItem
{
    protected $canRestock;
    protected $contract;
    protected $currentQuantity;
    protected $customAttributes;
    protected $discountAllocations;
    protected $discountedTotal;
    protected $discountedTotalSet;
    protected $discountedUnitPrice;
    protected $discountedUnitPriceAfterAllDiscountsSet;
    protected $discountedUnitPriceSet;
    protected $duties;
    protected $fulfillableQuantity;
    protected $fulfillmentService;
    protected $fulfillmentStatus;
    protected $id;
    protected $image;
    protected $isGiftCard;
    protected $lineItemGroup;
    protected $merchantEditable;
    protected $name;
    protected $nonFulfillableQuantity;
    protected $originalTotal;
    protected $originalTotalSet;
    protected $originalUnitPrice;
    protected $originalUnitPriceSet;
    protected $product;
    protected $quantity;
    protected $refundableQuantity;
    protected $requiresShipping;
    protected $restockable;
    protected $sellingPlan;
    protected $sku;
    protected $staffMember;
    protected $taxLines;
    protected $taxable;
    protected $title;
    protected $totalDiscount;
    protected $totalDiscountSet;
    protected $unfulfilledDiscountedTotal;
    protected $unfulfilledDiscountedTotalSet;
    protected $unfulfilledOriginalTotal;
    protected $unfulfilledOriginalTotalSet;
    protected $unfulfilledQuantity;
    protected $variant;
    protected $variantTitle;
    protected $vendor;

    
    /**
     * @return bool
     */
    public function getCanRestock()
    {
        return $this->canRestock;
    }

    
    /**
     * @return SubscriptionContract
     */
    public function getContract()
    {
        return $this->contract;
    }

    
    /**
     * @return int
     */
    public function getCurrentQuantity()
    {
        return $this->currentQuantity;
    }

    
    /**
     * @return Attribute[]
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    
    /**
     * @return DiscountAllocation[]
     */
    public function getDiscountAllocations()
    {
        return $this->discountAllocations;
    }

    
    /**
     * @return string
     */
    public function getDiscountedTotal()
    {
        return $this->discountedTotal;
    }

    
    /**
     * @return MoneyBag
     */
    public function getDiscountedTotalSet()
    {
        return $this->discountedTotalSet;
    }

    
    /**
     * @return string
     */
    public function getDiscountedUnitPrice()
    {
        return $this->discountedUnitPrice;
    }

    
    /**
     * @return MoneyBag
     */
    public function getDiscountedUnitPriceAfterAllDiscountsSet()
    {
        return $this->discountedUnitPriceAfterAllDiscountsSet;
    }

    
    /**
     * @return MoneyBag
     */
    public function getDiscountedUnitPriceSet()
    {
        return $this->discountedUnitPriceSet;
    }

    
    /**
     * @return Duty[]
     */
    public function getDuties()
    {
        return $this->duties;
    }

    
    /**
     * @return int
     */
    public function getFulfillableQuantity()
    {
        return $this->fulfillableQuantity;
    }

    
    /**
     * @return FulfillmentService
     */
    public function getFulfillmentService()
    {
        return $this->fulfillmentService;
    }

    
    /**
     * @return string
     */
    public function getFulfillmentStatus()
    {
        return $this->fulfillmentStatus;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }

    
    /**
     * @return bool
     */
    public function getIsGiftCard()
    {
        return $this->isGiftCard;
    }

    
    /**
     * @return LineItemGroup
     */
    public function getLineItemGroup()
    {
        return $this->lineItemGroup;
    }

    
    /**
     * @return bool
     */
    public function getMerchantEditable()
    {
        return $this->merchantEditable;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return int
     */
    public function getNonFulfillableQuantity()
    {
        return $this->nonFulfillableQuantity;
    }

    
    /**
     * @return string
     */
    public function getOriginalTotal()
    {
        return $this->originalTotal;
    }

    
    /**
     * @return MoneyBag
     */
    public function getOriginalTotalSet()
    {
        return $this->originalTotalSet;
    }

    
    /**
     * @return string
     */
    public function getOriginalUnitPrice()
    {
        return $this->originalUnitPrice;
    }

    
    /**
     * @return MoneyBag
     */
    public function getOriginalUnitPriceSet()
    {
        return $this->originalUnitPriceSet;
    }

    
    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    
    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    
    /**
     * @return int
     */
    public function getRefundableQuantity()
    {
        return $this->refundableQuantity;
    }

    
    /**
     * @return bool
     */
    public function getRequiresShipping()
    {
        return $this->requiresShipping;
    }

    
    /**
     * @return bool
     */
    public function getRestockable()
    {
        return $this->restockable;
    }

    
    /**
     * @return LineItemSellingPlan
     */
    public function getSellingPlan()
    {
        return $this->sellingPlan;
    }

    
    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    
    /**
     * @return StaffMember
     */
    public function getStaffMember()
    {
        return $this->staffMember;
    }

    
    /**
     * @return TaxLine[]
     */
    public function getTaxLines()
    {
        return $this->taxLines;
    }

    
    /**
     * @return bool
     */
    public function getTaxable()
    {
        return $this->taxable;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    
    /**
     * @return string
     */
    public function getTotalDiscount()
    {
        return $this->totalDiscount;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalDiscountSet()
    {
        return $this->totalDiscountSet;
    }

    
    /**
     * @return string
     */
    public function getUnfulfilledDiscountedTotal()
    {
        return $this->unfulfilledDiscountedTotal;
    }

    
    /**
     * @return MoneyBag
     */
    public function getUnfulfilledDiscountedTotalSet()
    {
        return $this->unfulfilledDiscountedTotalSet;
    }

    
    /**
     * @return string
     */
    public function getUnfulfilledOriginalTotal()
    {
        return $this->unfulfilledOriginalTotal;
    }

    
    /**
     * @return MoneyBag
     */
    public function getUnfulfilledOriginalTotalSet()
    {
        return $this->unfulfilledOriginalTotalSet;
    }

    
    /**
     * @return int
     */
    public function getUnfulfilledQuantity()
    {
        return $this->unfulfilledQuantity;
    }

    
    /**
     * @return ProductVariant
     */
    public function getVariant()
    {
        return $this->variant;
    }

    
    /**
     * @return string
     */
    public function getVariantTitle()
    {
        return $this->variantTitle;
    }

    
    /**
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['canRestock']) && $data['canRestock'] !== null) {
                $instance->canRestock = $data['canRestock'];
            }
            if (isset($data['contract']) && $data['contract'] !== null) {
                $instance->contract = SubscriptionContract::fromArray($data['contract']);
            }
            if (isset($data['currentQuantity']) && $data['currentQuantity'] !== null) {
                $instance->currentQuantity = $data['currentQuantity'];
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return Attribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['discountAllocations']) && $data['discountAllocations'] !== null) {
                $instance->discountAllocations = array_map(function($item) { return DiscountAllocation::fromArray($item); }, $data['discountAllocations']);
            }
            if (isset($data['discountedTotal']) && $data['discountedTotal'] !== null) {
                $instance->discountedTotal = $data['discountedTotal'];
            }
            if (isset($data['discountedTotalSet']) && $data['discountedTotalSet'] !== null) {
                $instance->discountedTotalSet = MoneyBag::fromArray($data['discountedTotalSet']);
            }
            if (isset($data['discountedUnitPrice']) && $data['discountedUnitPrice'] !== null) {
                $instance->discountedUnitPrice = $data['discountedUnitPrice'];
            }
            if (isset($data['discountedUnitPriceAfterAllDiscountsSet']) && $data['discountedUnitPriceAfterAllDiscountsSet'] !== null) {
                $instance->discountedUnitPriceAfterAllDiscountsSet = MoneyBag::fromArray($data['discountedUnitPriceAfterAllDiscountsSet']);
            }
            if (isset($data['discountedUnitPriceSet']) && $data['discountedUnitPriceSet'] !== null) {
                $instance->discountedUnitPriceSet = MoneyBag::fromArray($data['discountedUnitPriceSet']);
            }
            if (isset($data['duties']) && $data['duties'] !== null) {
                $instance->duties = array_map(function($item) { return Duty::fromArray($item); }, $data['duties']);
            }
            if (isset($data['fulfillableQuantity']) && $data['fulfillableQuantity'] !== null) {
                $instance->fulfillableQuantity = $data['fulfillableQuantity'];
            }
            if (isset($data['fulfillmentService']) && $data['fulfillmentService'] !== null) {
                $instance->fulfillmentService = FulfillmentService::fromArray($data['fulfillmentService']);
            }
            if (isset($data['fulfillmentStatus']) && $data['fulfillmentStatus'] !== null) {
                $instance->fulfillmentStatus = $data['fulfillmentStatus'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = Image::fromArray($data['image']);
            }
            if (isset($data['isGiftCard']) && $data['isGiftCard'] !== null) {
                $instance->isGiftCard = $data['isGiftCard'];
            }
            if (isset($data['lineItemGroup']) && $data['lineItemGroup'] !== null) {
                $instance->lineItemGroup = LineItemGroup::fromArray($data['lineItemGroup']);
            }
            if (isset($data['merchantEditable']) && $data['merchantEditable'] !== null) {
                $instance->merchantEditable = $data['merchantEditable'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['nonFulfillableQuantity']) && $data['nonFulfillableQuantity'] !== null) {
                $instance->nonFulfillableQuantity = $data['nonFulfillableQuantity'];
            }
            if (isset($data['originalTotal']) && $data['originalTotal'] !== null) {
                $instance->originalTotal = $data['originalTotal'];
            }
            if (isset($data['originalTotalSet']) && $data['originalTotalSet'] !== null) {
                $instance->originalTotalSet = MoneyBag::fromArray($data['originalTotalSet']);
            }
            if (isset($data['originalUnitPrice']) && $data['originalUnitPrice'] !== null) {
                $instance->originalUnitPrice = $data['originalUnitPrice'];
            }
            if (isset($data['originalUnitPriceSet']) && $data['originalUnitPriceSet'] !== null) {
                $instance->originalUnitPriceSet = MoneyBag::fromArray($data['originalUnitPriceSet']);
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = Product::fromArray($data['product']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['refundableQuantity']) && $data['refundableQuantity'] !== null) {
                $instance->refundableQuantity = $data['refundableQuantity'];
            }
            if (isset($data['requiresShipping']) && $data['requiresShipping'] !== null) {
                $instance->requiresShipping = $data['requiresShipping'];
            }
            if (isset($data['restockable']) && $data['restockable'] !== null) {
                $instance->restockable = $data['restockable'];
            }
            if (isset($data['sellingPlan']) && $data['sellingPlan'] !== null) {
                $instance->sellingPlan = LineItemSellingPlan::fromArray($data['sellingPlan']);
            }
            if (isset($data['sku']) && $data['sku'] !== null) {
                $instance->sku = $data['sku'];
            }
            if (isset($data['staffMember']) && $data['staffMember'] !== null) {
                $instance->staffMember = StaffMember::fromArray($data['staffMember']);
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return TaxLine::fromArray($item); }, $data['taxLines']);
            }
            if (isset($data['taxable']) && $data['taxable'] !== null) {
                $instance->taxable = $data['taxable'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['totalDiscount']) && $data['totalDiscount'] !== null) {
                $instance->totalDiscount = $data['totalDiscount'];
            }
            if (isset($data['totalDiscountSet']) && $data['totalDiscountSet'] !== null) {
                $instance->totalDiscountSet = MoneyBag::fromArray($data['totalDiscountSet']);
            }
            if (isset($data['unfulfilledDiscountedTotal']) && $data['unfulfilledDiscountedTotal'] !== null) {
                $instance->unfulfilledDiscountedTotal = $data['unfulfilledDiscountedTotal'];
            }
            if (isset($data['unfulfilledDiscountedTotalSet']) && $data['unfulfilledDiscountedTotalSet'] !== null) {
                $instance->unfulfilledDiscountedTotalSet = MoneyBag::fromArray($data['unfulfilledDiscountedTotalSet']);
            }
            if (isset($data['unfulfilledOriginalTotal']) && $data['unfulfilledOriginalTotal'] !== null) {
                $instance->unfulfilledOriginalTotal = $data['unfulfilledOriginalTotal'];
            }
            if (isset($data['unfulfilledOriginalTotalSet']) && $data['unfulfilledOriginalTotalSet'] !== null) {
                $instance->unfulfilledOriginalTotalSet = MoneyBag::fromArray($data['unfulfilledOriginalTotalSet']);
            }
            if (isset($data['unfulfilledQuantity']) && $data['unfulfilledQuantity'] !== null) {
                $instance->unfulfilledQuantity = $data['unfulfilledQuantity'];
            }
            if (isset($data['variant']) && $data['variant'] !== null) {
                $instance->variant = ProductVariant::fromArray($data['variant']);
            }
            if (isset($data['variantTitle']) && $data['variantTitle'] !== null) {
                $instance->variantTitle = $data['variantTitle'];
            }
            if (isset($data['vendor']) && $data['vendor'] !== null) {
                $instance->vendor = $data['vendor'];
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
            if ($this->canRestock !== null) {
                $data['canRestock'] = $this->canRestock;
            }
            if ($this->contract !== null) {
                $data['contract'] = $this->contract->asArray();
            }
            if ($this->currentQuantity !== null) {
                $data['currentQuantity'] = $this->currentQuantity;
            }
            if ($this->customAttributes !== null) {
                $data['customAttributes'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributes);
            }
            if ($this->discountAllocations !== null) {
                $data['discountAllocations'] = array_map(function($item) { return $item->asArray(); }, $this->discountAllocations);
            }
            if ($this->discountedTotal !== null) {
                $data['discountedTotal'] = $this->discountedTotal;
            }
            if ($this->discountedTotalSet !== null) {
                $data['discountedTotalSet'] = $this->discountedTotalSet->asArray();
            }
            if ($this->discountedUnitPrice !== null) {
                $data['discountedUnitPrice'] = $this->discountedUnitPrice;
            }
            if ($this->discountedUnitPriceAfterAllDiscountsSet !== null) {
                $data['discountedUnitPriceAfterAllDiscountsSet'] = $this->discountedUnitPriceAfterAllDiscountsSet->asArray();
            }
            if ($this->discountedUnitPriceSet !== null) {
                $data['discountedUnitPriceSet'] = $this->discountedUnitPriceSet->asArray();
            }
            if ($this->duties !== null) {
                $data['duties'] = array_map(function($item) { return $item->asArray(); }, $this->duties);
            }
            if ($this->fulfillableQuantity !== null) {
                $data['fulfillableQuantity'] = $this->fulfillableQuantity;
            }
            if ($this->fulfillmentService !== null) {
                $data['fulfillmentService'] = $this->fulfillmentService->asArray();
            }
            if ($this->fulfillmentStatus !== null) {
                $data['fulfillmentStatus'] = $this->fulfillmentStatus;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            if ($this->isGiftCard !== null) {
                $data['isGiftCard'] = $this->isGiftCard;
            }
            if ($this->lineItemGroup !== null) {
                $data['lineItemGroup'] = $this->lineItemGroup->asArray();
            }
            if ($this->merchantEditable !== null) {
                $data['merchantEditable'] = $this->merchantEditable;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->nonFulfillableQuantity !== null) {
                $data['nonFulfillableQuantity'] = $this->nonFulfillableQuantity;
            }
            if ($this->originalTotal !== null) {
                $data['originalTotal'] = $this->originalTotal;
            }
            if ($this->originalTotalSet !== null) {
                $data['originalTotalSet'] = $this->originalTotalSet->asArray();
            }
            if ($this->originalUnitPrice !== null) {
                $data['originalUnitPrice'] = $this->originalUnitPrice;
            }
            if ($this->originalUnitPriceSet !== null) {
                $data['originalUnitPriceSet'] = $this->originalUnitPriceSet->asArray();
            }
            if ($this->product !== null) {
                $data['product'] = $this->product->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->refundableQuantity !== null) {
                $data['refundableQuantity'] = $this->refundableQuantity;
            }
            if ($this->requiresShipping !== null) {
                $data['requiresShipping'] = $this->requiresShipping;
            }
            if ($this->restockable !== null) {
                $data['restockable'] = $this->restockable;
            }
            if ($this->sellingPlan !== null) {
                $data['sellingPlan'] = $this->sellingPlan->asArray();
            }
            if ($this->sku !== null) {
                $data['sku'] = $this->sku;
            }
            if ($this->staffMember !== null) {
                $data['staffMember'] = $this->staffMember->asArray();
            }
            if ($this->taxLines !== null) {
                $data['taxLines'] = array_map(function($item) { return $item->asArray(); }, $this->taxLines);
            }
            if ($this->taxable !== null) {
                $data['taxable'] = $this->taxable;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->totalDiscount !== null) {
                $data['totalDiscount'] = $this->totalDiscount;
            }
            if ($this->totalDiscountSet !== null) {
                $data['totalDiscountSet'] = $this->totalDiscountSet->asArray();
            }
            if ($this->unfulfilledDiscountedTotal !== null) {
                $data['unfulfilledDiscountedTotal'] = $this->unfulfilledDiscountedTotal;
            }
            if ($this->unfulfilledDiscountedTotalSet !== null) {
                $data['unfulfilledDiscountedTotalSet'] = $this->unfulfilledDiscountedTotalSet->asArray();
            }
            if ($this->unfulfilledOriginalTotal !== null) {
                $data['unfulfilledOriginalTotal'] = $this->unfulfilledOriginalTotal;
            }
            if ($this->unfulfilledOriginalTotalSet !== null) {
                $data['unfulfilledOriginalTotalSet'] = $this->unfulfilledOriginalTotalSet->asArray();
            }
            if ($this->unfulfilledQuantity !== null) {
                $data['unfulfilledQuantity'] = $this->unfulfilledQuantity;
            }
            if ($this->variant !== null) {
                $data['variant'] = $this->variant->asArray();
            }
            if ($this->variantTitle !== null) {
                $data['variantTitle'] = $this->variantTitle;
            }
            if ($this->vendor !== null) {
                $data['vendor'] = $this->vendor;
            }
            return $data;
        }
}
