<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionContract;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDiscountAllocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDuty;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLineItemGroup;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProduct;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLineItemSellingPlan;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyReturnReasonDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyTaxLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductVariant;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyWeight;

/**
 * The `LineItem` object represents a single product or service that a customer purchased in an
 * [order](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order).
 * Each line item is associated with a
 * [product variant](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant)
 * and can have multiple [discount allocations](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountAllocation).
 * Line items contain details about what was purchased, including the product variant, quantity, pricing,
 * and fulfillment status.
 *
 * Use the `LineItem` object to manage the following processes:
 *
 * - [Track the quantity of items](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/build-fulfillment-solutions) ordered, fulfilled, and unfulfilled.
 * - [Calculate prices](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/edit-orders), including discounts and taxes.
 * - Manage fulfillment through [fulfillment services](https://shopify.dev/docs/apps/build/orders-fulfillment/fulfillment-service-apps).
 * - Manage [returns](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/build-return-management) and [exchanges](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/manage-exchanges).
 * - Handle [subscriptions](https://shopify.dev/docs/apps/build/purchase-options/subscriptions) and recurring orders.
 *
 * Line items can also include custom attributes and properties, allowing merchants to add specific details
 * about each item in an order. Learn more about
 * [managing orders and fulfillment](https://shopify.dev/docs/apps/build/orders-fulfillment).
 */
class ShopifyLineItem implements ShopifyNode
{
    protected $canRestock;
    protected $contract;
    protected $createdAt;
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
    protected $priceAfterAllDiscountsBeforeTaxesSet;
    protected $product;
    protected $quantity;
    protected $refundableQuantity;
    protected $requiresShipping;
    protected $restockable;
    protected $sellingPlan;
    protected $sku;
    protected $staffMember;
    protected $suggestedReturnReasonDefinitions;
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
    protected $weight;

    
    /**
     * Whether the line item can be restocked.
     *
     * @return bool
     */
    public function getCanRestock(): ?bool
    {
        return $this->canRestock;
    }

    
    /**
     * The subscription contract associated with this line item.
     *
     * @return ShopifySubscriptionContract
     */
    public function getContract(): ?ShopifySubscriptionContract
    {
        return $this->contract;
    }

    
    /**
     * The date and time when the line item was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The number of units ordered, excluding refunded and removed units.
     *
     * @return int
     */
    public function getCurrentQuantity(): ?int
    {
        return $this->currentQuantity;
    }

    
    /**
     * A list of attributes that represent custom features or special requests.
     *
     * @return ShopifyAttribute[]
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    
    /**
     * The discounts that have been allocated to the line item by discount applications, including discounts allocated to refunded and removed quantities.
     *
     * @return ShopifyDiscountAllocation[]
     */
    public function getDiscountAllocations(): ?array
    {
        return $this->discountAllocations;
    }

    
    /**
     * The total discounted price of the line item in shop currency, including refunded and removed quantities. This value doesn't include order-level discounts.
     *
     * @return string
     */
    public function getDiscountedTotal(): mixed
    {
        return $this->discountedTotal;
    }

    
    /**
     * The total discounted price of the line item in shop and presentment currencies, including refunded and removed quantities. This value doesn't include order-level discounts. Code-based discounts aren't included by default.
     *
     * @return ShopifyMoneyBag
     */
    public function getDiscountedTotalSet(): ?ShopifyMoneyBag
    {
        return $this->discountedTotalSet;
    }

    
    /**
     * The approximate unit price of the line item in shop currency. This value includes line-level discounts and discounts applied to refunded and removed quantities. It doesn't include order-level or code-based discounts.
     *
     * @return string
     */
    public function getDiscountedUnitPrice(): mixed
    {
        return $this->discountedUnitPrice;
    }

    
    /**
     * The approximate unit price of the line item in shop and presentment currencies. This value includes discounts applied to refunded and removed quantities.
     *
     * @return ShopifyMoneyBag
     */
    public function getDiscountedUnitPriceAfterAllDiscountsSet(): ?ShopifyMoneyBag
    {
        return $this->discountedUnitPriceAfterAllDiscountsSet;
    }

    
    /**
     * The approximate unit price of the line item in shop and presentment currencies. This value includes line-level discounts and discounts applied to refunded and removed quantities. It doesn't include order-level or code-based discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getDiscountedUnitPriceSet(): ?ShopifyMoneyBag
    {
        return $this->discountedUnitPriceSet;
    }

    
    /**
     * The duties associated with the line item.
     *
     * @return ShopifyDuty[]
     */
    public function getDuties(): ?array
    {
        return $this->duties;
    }

    
    /**
     * The total number of units to fulfill.
     *
     * @return int
     */
    public function getFulfillableQuantity(): ?int
    {
        return $this->fulfillableQuantity;
    }

    
    /**
     * The fulfillment service that stocks the product variant belonging to a line item.
     *
     * This is a third-party fulfillment service in the following scenarios:
     *
     * **Scenario 1**
     * - The product variant is stocked by a single fulfillment service.
     * - The [FulfillmentService](/api/admin-graphql/latest/objects/FulfillmentService) is a third-party fulfillment service. Third-party fulfillment services don't have a handle with the value `manual`.
     *
     * **Scenario 2**
     * - Multiple fulfillment services stock the product variant.
     * - The last time that the line item was unfulfilled, it was awaiting fulfillment by a third-party fulfillment service. Third-party fulfillment services don't have a handle with the value `manual`.
     *
     * If none of the above conditions are met, then the fulfillment service has the `manual` handle.
     *
     * @return ShopifyFulfillmentService
     */
    public function getFulfillmentService(): ?ShopifyFulfillmentService
    {
        return $this->fulfillmentService;
    }

    
    /**
     * The line item's fulfillment status. Returns 'fulfilled' if fulfillableQuantity >= quantity,
     * 'partial' if  fulfillableQuantity > 0, and 'unfulfilled' otherwise.
     *
     * @return string
     */
    public function getFulfillmentStatus(): ?string
    {
        return $this->fulfillmentStatus;
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
     * The image associated to the line item's variant.
     *
     * @return ShopifyImage
     */
    public function getImage(): ?ShopifyImage
    {
        return $this->image;
    }

    
    /**
     * Whether the line item represents the purchase of a gift card.
     *
     * @return bool
     */
    public function getIsGiftCard(): ?bool
    {
        return $this->isGiftCard;
    }

    
    /**
     * The line item group associated to the line item.
     *
     * @return ShopifyLineItemGroup
     */
    public function getLineItemGroup(): ?ShopifyLineItemGroup
    {
        return $this->lineItemGroup;
    }

    
    /**
     * Whether the line item can be edited or not.
     *
     * @return bool
     */
    public function getMerchantEditable(): ?bool
    {
        return $this->merchantEditable;
    }

    
    /**
     * The title of the product, optionally appended with the title of the variant (if applicable).
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The total number of units that can't be fulfilled. For example, if items have been refunded, or the item is not something that can be fulfilled, like a tip. Please see the [FulfillmentOrder](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrder) object for more fulfillment details.
     *
     * @return int
     */
    public function getNonFulfillableQuantity(): ?int
    {
        return $this->nonFulfillableQuantity;
    }

    
    /**
     * In shop currency, the total price of the line item when the order was created.
     * This value doesn't include discounts.
     *
     * @return string
     */
    public function getOriginalTotal(): mixed
    {
        return $this->originalTotal;
    }

    
    /**
     * In shop and presentment currencies, the total price of the line item when the order was created.
     * This value doesn't include discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalTotalSet(): ?ShopifyMoneyBag
    {
        return $this->originalTotalSet;
    }

    
    /**
     * In shop currency, the unit price of the line item when the order was created. This value doesn't include discounts.
     *
     * @return string
     */
    public function getOriginalUnitPrice(): mixed
    {
        return $this->originalUnitPrice;
    }

    
    /**
     * In shop and presentment currencies, the unit price of the line item when the order was created. This value doesn't include discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalUnitPriceSet(): ?ShopifyMoneyBag
    {
        return $this->originalUnitPriceSet;
    }

    
    /**
     * The total price of the line item in shop and presentment currencies,
     * after all discounts are applied and excluding refunded and removed quantities.
     * This value doesn't include taxes.
     *
     * @return ShopifyMoneyBag
     */
    public function getPriceAfterAllDiscountsBeforeTaxesSet(): ?ShopifyMoneyBag
    {
        return $this->priceAfterAllDiscountsBeforeTaxesSet;
    }

    
    /**
     * The Product object associated with this line item's variant.
     *
     * @return ShopifyProduct
     */
    public function getProduct(): ?ShopifyProduct
    {
        return $this->product;
    }

    
    /**
     * The number of units ordered, including refunded and removed units.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * The number of units ordered, excluding refunded units and removed units.
     *
     * @return int
     */
    public function getRefundableQuantity(): ?int
    {
        return $this->refundableQuantity;
    }

    
    /**
     * Whether physical shipping is required for the variant.
     *
     * @return bool
     */
    public function getRequiresShipping(): ?bool
    {
        return $this->requiresShipping;
    }

    
    /**
     * Whether the line item can be restocked.
     *
     * @return bool
     */
    public function getRestockable(): ?bool
    {
        return $this->restockable;
    }

    
    /**
     * The selling plan details associated with the line item.
     *
     * @return ShopifyLineItemSellingPlan
     */
    public function getSellingPlan(): ?ShopifyLineItemSellingPlan
    {
        return $this->sellingPlan;
    }

    
    /**
     * The variant SKU number.
     *
     * @return string
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    
    /**
     * Staff attributed to the line item.
     *
     * @return ShopifyStaffMember
     */
    public function getStaffMember(): ?ShopifyStaffMember
    {
        return $this->staffMember;
    }

    
    /**
     * Return reasons suggested based on the line item's product category in Shopify's product taxonomy. Use [`returnReasonDefinitions`](https://shopify.dev/docs/api/admin-graphql/latest/queries/returnReasonDefinitions) to access the full library of available reasons.
     *
     * @return ShopifyReturnReasonDefinitionConnection
     */
    public function getSuggestedReturnReasonDefinitions(): ?ShopifyReturnReasonDefinitionConnection
    {
        return $this->suggestedReturnReasonDefinitions;
    }

    
    /**
     * The taxes charged for the line item, including taxes charged for refunded and removed quantities.
     *
     * @return ShopifyTaxLine[]
     */
    public function getTaxLines(): ?array
    {
        return $this->taxLines;
    }

    
    /**
     * Whether the variant is taxable.
     *
     * @return bool
     */
    public function getTaxable(): ?bool
    {
        return $this->taxable;
    }

    
    /**
     * The title of the product at time of order creation.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The total discount allocated to the line item in shop currency, including the total allocated to refunded and removed quantities. This value doesn't include order-level discounts.
     *
     * @return string
     */
    public function getTotalDiscount(): mixed
    {
        return $this->totalDiscount;
    }

    
    /**
     * The total discount allocated to the line item in shop and presentment currencies, including the total allocated to refunded and removed quantities. This value doesn't include order-level discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalDiscountSet(): ?ShopifyMoneyBag
    {
        return $this->totalDiscountSet;
    }

    
    /**
     * In shop currency, the total discounted price of the unfulfilled quantity for the line item.
     *
     * @return string
     */
    public function getUnfulfilledDiscountedTotal(): mixed
    {
        return $this->unfulfilledDiscountedTotal;
    }

    
    /**
     * In shop and presentment currencies, the total discounted price of the unfulfilled quantity for the line item.
     *
     * @return ShopifyMoneyBag
     */
    public function getUnfulfilledDiscountedTotalSet(): ?ShopifyMoneyBag
    {
        return $this->unfulfilledDiscountedTotalSet;
    }

    
    /**
     * In shop currency, the total price of the unfulfilled quantity for the line item. This value doesn't include discounts.
     *
     * @return string
     */
    public function getUnfulfilledOriginalTotal(): mixed
    {
        return $this->unfulfilledOriginalTotal;
    }

    
    /**
     * In shop and presentment currencies, the total price of the unfulfilled quantity for the line item. This value doesn't include discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getUnfulfilledOriginalTotalSet(): ?ShopifyMoneyBag
    {
        return $this->unfulfilledOriginalTotalSet;
    }

    
    /**
     * The number of units not yet fulfilled.
     *
     * @return int
     */
    public function getUnfulfilledQuantity(): ?int
    {
        return $this->unfulfilledQuantity;
    }

    
    /**
     * The Variant object associated with this line item.
     *
     * @return ShopifyProductVariant
     */
    public function getVariant(): ?ShopifyProductVariant
    {
        return $this->variant;
    }

    
    /**
     * The title of the variant at time of order creation.
     *
     * @return string
     */
    public function getVariantTitle(): ?string
    {
        return $this->variantTitle;
    }

    
    /**
     * The name of the vendor who made the variant.
     *
     * @return string
     */
    public function getVendor(): ?string
    {
        return $this->vendor;
    }

    
    /**
     * The weight of a line item unit.
     *
     * @return ShopifyWeight
     */
    public function getWeight(): ?ShopifyWeight
    {
        return $this->weight;
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
                $instance->contract = ShopifySubscriptionContract::fromArray($data['contract']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currentQuantity']) && $data['currentQuantity'] !== null) {
                $instance->currentQuantity = $data['currentQuantity'];
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return ShopifyAttribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['discountAllocations']) && $data['discountAllocations'] !== null) {
                $instance->discountAllocations = array_map(function($item) { return ShopifyDiscountAllocation::fromArray($item); }, $data['discountAllocations']);
            }
            if (isset($data['discountedTotal']) && $data['discountedTotal'] !== null) {
                $instance->discountedTotal = $data['discountedTotal'];
            }
            if (isset($data['discountedTotalSet']) && $data['discountedTotalSet'] !== null) {
                $instance->discountedTotalSet = ShopifyMoneyBag::fromArray($data['discountedTotalSet']);
            }
            if (isset($data['discountedUnitPrice']) && $data['discountedUnitPrice'] !== null) {
                $instance->discountedUnitPrice = $data['discountedUnitPrice'];
            }
            if (isset($data['discountedUnitPriceAfterAllDiscountsSet']) && $data['discountedUnitPriceAfterAllDiscountsSet'] !== null) {
                $instance->discountedUnitPriceAfterAllDiscountsSet = ShopifyMoneyBag::fromArray($data['discountedUnitPriceAfterAllDiscountsSet']);
            }
            if (isset($data['discountedUnitPriceSet']) && $data['discountedUnitPriceSet'] !== null) {
                $instance->discountedUnitPriceSet = ShopifyMoneyBag::fromArray($data['discountedUnitPriceSet']);
            }
            if (isset($data['duties']) && $data['duties'] !== null) {
                $instance->duties = array_map(function($item) { return ShopifyDuty::fromArray($item); }, $data['duties']);
            }
            if (isset($data['fulfillableQuantity']) && $data['fulfillableQuantity'] !== null) {
                $instance->fulfillableQuantity = $data['fulfillableQuantity'];
            }
            if (isset($data['fulfillmentService']) && $data['fulfillmentService'] !== null) {
                $instance->fulfillmentService = ShopifyFulfillmentService::fromArray($data['fulfillmentService']);
            }
            if (isset($data['fulfillmentStatus']) && $data['fulfillmentStatus'] !== null) {
                $instance->fulfillmentStatus = $data['fulfillmentStatus'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = ShopifyImage::fromArray($data['image']);
            }
            if (isset($data['isGiftCard']) && $data['isGiftCard'] !== null) {
                $instance->isGiftCard = $data['isGiftCard'];
            }
            if (isset($data['lineItemGroup']) && $data['lineItemGroup'] !== null) {
                $instance->lineItemGroup = ShopifyLineItemGroup::fromArray($data['lineItemGroup']);
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
                $instance->originalTotalSet = ShopifyMoneyBag::fromArray($data['originalTotalSet']);
            }
            if (isset($data['originalUnitPrice']) && $data['originalUnitPrice'] !== null) {
                $instance->originalUnitPrice = $data['originalUnitPrice'];
            }
            if (isset($data['originalUnitPriceSet']) && $data['originalUnitPriceSet'] !== null) {
                $instance->originalUnitPriceSet = ShopifyMoneyBag::fromArray($data['originalUnitPriceSet']);
            }
            if (isset($data['priceAfterAllDiscountsBeforeTaxesSet']) && $data['priceAfterAllDiscountsBeforeTaxesSet'] !== null) {
                $instance->priceAfterAllDiscountsBeforeTaxesSet = ShopifyMoneyBag::fromArray($data['priceAfterAllDiscountsBeforeTaxesSet']);
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = ShopifyProduct::fromArray($data['product']);
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
                $instance->sellingPlan = ShopifyLineItemSellingPlan::fromArray($data['sellingPlan']);
            }
            if (isset($data['sku']) && $data['sku'] !== null) {
                $instance->sku = $data['sku'];
            }
            if (isset($data['staffMember']) && $data['staffMember'] !== null) {
                $instance->staffMember = ShopifyStaffMember::fromArray($data['staffMember']);
            }
            if (isset($data['suggestedReturnReasonDefinitions']) && $data['suggestedReturnReasonDefinitions'] !== null) {
                $instance->suggestedReturnReasonDefinitions = ShopifyReturnReasonDefinitionConnection::fromArray($data['suggestedReturnReasonDefinitions']);
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return ShopifyTaxLine::fromArray($item); }, $data['taxLines']);
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
                $instance->totalDiscountSet = ShopifyMoneyBag::fromArray($data['totalDiscountSet']);
            }
            if (isset($data['unfulfilledDiscountedTotal']) && $data['unfulfilledDiscountedTotal'] !== null) {
                $instance->unfulfilledDiscountedTotal = $data['unfulfilledDiscountedTotal'];
            }
            if (isset($data['unfulfilledDiscountedTotalSet']) && $data['unfulfilledDiscountedTotalSet'] !== null) {
                $instance->unfulfilledDiscountedTotalSet = ShopifyMoneyBag::fromArray($data['unfulfilledDiscountedTotalSet']);
            }
            if (isset($data['unfulfilledOriginalTotal']) && $data['unfulfilledOriginalTotal'] !== null) {
                $instance->unfulfilledOriginalTotal = $data['unfulfilledOriginalTotal'];
            }
            if (isset($data['unfulfilledOriginalTotalSet']) && $data['unfulfilledOriginalTotalSet'] !== null) {
                $instance->unfulfilledOriginalTotalSet = ShopifyMoneyBag::fromArray($data['unfulfilledOriginalTotalSet']);
            }
            if (isset($data['unfulfilledQuantity']) && $data['unfulfilledQuantity'] !== null) {
                $instance->unfulfilledQuantity = $data['unfulfilledQuantity'];
            }
            if (isset($data['variant']) && $data['variant'] !== null) {
                $instance->variant = ShopifyProductVariant::fromArray($data['variant']);
            }
            if (isset($data['variantTitle']) && $data['variantTitle'] !== null) {
                $instance->variantTitle = $data['variantTitle'];
            }
            if (isset($data['vendor']) && $data['vendor'] !== null) {
                $instance->vendor = $data['vendor'];
            }
            if (isset($data['weight']) && $data['weight'] !== null) {
                $instance->weight = ShopifyWeight::fromArray($data['weight']);
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
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
            if ($this->priceAfterAllDiscountsBeforeTaxesSet !== null) {
                $data['priceAfterAllDiscountsBeforeTaxesSet'] = $this->priceAfterAllDiscountsBeforeTaxesSet->asArray();
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
            if ($this->suggestedReturnReasonDefinitions !== null) {
                $data['suggestedReturnReasonDefinitions'] = $this->suggestedReturnReasonDefinitions->asArray();
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
            if ($this->weight !== null) {
                $data['weight'] = $this->weight->asArray();
            }
            return $data;
        }
}
