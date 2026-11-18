<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDraftOrderAppliedDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCalculatedDraftOrderLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyTypedAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProduct;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductVariant;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyWeight;

/**
 * The calculated line item for a draft order.
 */
class ShopifyCalculatedDraftOrderLineItem
{
    protected $appliedDiscount;
    protected $approximateDiscountedUnitPriceSet;
    protected $bundleComponents;
    protected $components;
    protected $custom;
    protected $customAttributes;
    protected $customAttributesV2;
    protected $discountedTotal;
    protected $discountedTotalSet;
    protected $discountedUnitPrice;
    protected $discountedUnitPriceSet;
    protected $fulfillmentService;
    protected $image;
    protected $isGiftCard;
    protected $name;
    protected $originalTotal;
    protected $originalTotalSet;
    protected $originalUnitPrice;
    protected $originalUnitPriceSet;
    protected $originalUnitPriceWithCurrency;
    protected $priceOverride;
    protected $product;
    protected $quantity;
    protected $requiresShipping;
    protected $sku;
    protected $taxable;
    protected $title;
    protected $totalDiscount;
    protected $totalDiscountSet;
    protected $uuid;
    protected $variant;
    protected $variantTitle;
    protected $vendor;
    protected $weight;

    
    /**
     * The custom applied discount.
     *
     * @return ShopifyDraftOrderAppliedDiscount
     */
    public function getAppliedDiscount(): ?ShopifyDraftOrderAppliedDiscount
    {
        return $this->appliedDiscount;
    }

    
    /**
     * The `discountedTotal` divided by `quantity`,
     * equal to the average value of the line item price per unit after discounts are applied.
     * This value doesn't include discounts applied to the entire draft order.
     *
     * @return ShopifyMoneyBag
     */
    public function getApproximateDiscountedUnitPriceSet(): ?ShopifyMoneyBag
    {
        return $this->approximateDiscountedUnitPriceSet;
    }

    
    /**
     * The bundle components of the draft order line item.
     *
     * @return ShopifyCalculatedDraftOrderLineItem[]
     */
    public function getBundleComponents(): ?array
    {
        return $this->bundleComponents;
    }

    
    /**
     * The components of the draft order line item.
     *
     * @return ShopifyCalculatedDraftOrderLineItem[]
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    
    /**
     * Whether the line item is custom (`true`) or contains a product variant (`false`).
     *
     * @return bool
     */
    public function getCustom(): ?bool
    {
        return $this->custom;
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
     * The list of additional information (metafields) with the associated types.
     *
     * @return ShopifyTypedAttribute[]
     */
    public function getCustomAttributesV2(): ?array
    {
        return $this->customAttributesV2;
    }

    
    /**
     * The total price with discounts applied.
     *
     * @return ShopifyMoneyV2
     */
    public function getDiscountedTotal(): ?ShopifyMoneyV2
    {
        return $this->discountedTotal;
    }

    
    /**
     * The total price with discounts applied.
     *
     * @return ShopifyMoneyBag
     */
    public function getDiscountedTotalSet(): ?ShopifyMoneyBag
    {
        return $this->discountedTotalSet;
    }

    
    /**
     * The unit price with discounts applied.
     *
     * @return ShopifyMoneyV2
     */
    public function getDiscountedUnitPrice(): ?ShopifyMoneyV2
    {
        return $this->discountedUnitPrice;
    }

    
    /**
     * The unit price with discounts applied.
     *
     * @return ShopifyMoneyBag
     */
    public function getDiscountedUnitPriceSet(): ?ShopifyMoneyBag
    {
        return $this->discountedUnitPriceSet;
    }

    
    /**
     * Name of the service provider who fulfilled the order.
     *
     * Valid values are either **manual** or the name of the provider.
     * For example, **amazon**, **shipwire**.
     *
     * Deleted fulfillment services will return null.
     *
     * @return ShopifyFulfillmentService
     */
    public function getFulfillmentService(): ?ShopifyFulfillmentService
    {
        return $this->fulfillmentService;
    }

    
    /**
     * The image associated with the draft order line item.
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
     * The name of the product.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The total price, excluding discounts, equal to the original unit price multiplied by quantity.
     *
     * @return ShopifyMoneyV2
     */
    public function getOriginalTotal(): ?ShopifyMoneyV2
    {
        return $this->originalTotal;
    }

    
    /**
     * The total price excluding discounts, equal to the original unit price multiplied by quantity.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalTotalSet(): ?ShopifyMoneyBag
    {
        return $this->originalTotalSet;
    }

    
    /**
     * The line item price without any discounts applied.
     *
     * @return ShopifyMoneyV2
     */
    public function getOriginalUnitPrice(): ?ShopifyMoneyV2
    {
        return $this->originalUnitPrice;
    }

    
    /**
     * The price without any discounts applied.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalUnitPriceSet(): ?ShopifyMoneyBag
    {
        return $this->originalUnitPriceSet;
    }

    
    /**
     * The original custom line item input price.
     *
     * @return ShopifyMoneyV2
     */
    public function getOriginalUnitPriceWithCurrency(): ?ShopifyMoneyV2
    {
        return $this->originalUnitPriceWithCurrency;
    }

    
    /**
     * The price override for the line item.
     *
     * @return ShopifyMoneyV2
     */
    public function getPriceOverride(): ?ShopifyMoneyV2
    {
        return $this->priceOverride;
    }

    
    /**
     * The product for the line item.
     *
     * @return ShopifyProduct
     */
    public function getProduct(): ?ShopifyProduct
    {
        return $this->product;
    }

    
    /**
     * The quantity of items. For a bundle item, this is the quantity of bundles,
     * not the quantity of items contained in the bundles themselves.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
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
     * The SKU number of the product variant.
     *
     * @return string
     */
    public function getSku(): ?string
    {
        return $this->sku;
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
     * The title of the product or variant. This field only applies to custom line items.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The total value of the discount.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalDiscount(): ?ShopifyMoneyV2
    {
        return $this->totalDiscount;
    }

    
    /**
     * The total discount amount.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalDiscountSet(): ?ShopifyMoneyBag
    {
        return $this->totalDiscountSet;
    }

    
    /**
     * The UUID of the draft order line item. Must be unique and consistent across requests.
     * This field is mandatory in order to manipulate drafts with bundles.
     *
     * @return string
     */
    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    
    /**
     * The product variant for the line item.
     *
     * @return ShopifyProductVariant
     */
    public function getVariant(): ?ShopifyProductVariant
    {
        return $this->variant;
    }

    
    /**
     * The name of the variant.
     *
     * @return string
     */
    public function getVariantTitle(): ?string
    {
        return $this->variantTitle;
    }

    
    /**
     * The name of the vendor who created the product variant.
     *
     * @return string
     */
    public function getVendor(): ?string
    {
        return $this->vendor;
    }

    
    /**
     * The weight unit and value.
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
            if (isset($data['appliedDiscount']) && $data['appliedDiscount'] !== null) {
                $instance->appliedDiscount = ShopifyDraftOrderAppliedDiscount::fromArray($data['appliedDiscount']);
            }
            if (isset($data['approximateDiscountedUnitPriceSet']) && $data['approximateDiscountedUnitPriceSet'] !== null) {
                $instance->approximateDiscountedUnitPriceSet = ShopifyMoneyBag::fromArray($data['approximateDiscountedUnitPriceSet']);
            }
            if (isset($data['bundleComponents']) && $data['bundleComponents'] !== null) {
                $instance->bundleComponents = array_map(function($item) { return ShopifyCalculatedDraftOrderLineItem::fromArray($item); }, $data['bundleComponents']);
            }
            if (isset($data['components']) && $data['components'] !== null) {
                $instance->components = array_map(function($item) { return ShopifyCalculatedDraftOrderLineItem::fromArray($item); }, $data['components']);
            }
            if (isset($data['custom']) && $data['custom'] !== null) {
                $instance->custom = $data['custom'];
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return ShopifyAttribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['customAttributesV2']) && $data['customAttributesV2'] !== null) {
                $instance->customAttributesV2 = array_map(function($item) { return ShopifyTypedAttribute::fromArray($item); }, $data['customAttributesV2']);
            }
            if (isset($data['discountedTotal']) && $data['discountedTotal'] !== null) {
                $instance->discountedTotal = ShopifyMoneyV2::fromArray($data['discountedTotal']);
            }
            if (isset($data['discountedTotalSet']) && $data['discountedTotalSet'] !== null) {
                $instance->discountedTotalSet = ShopifyMoneyBag::fromArray($data['discountedTotalSet']);
            }
            if (isset($data['discountedUnitPrice']) && $data['discountedUnitPrice'] !== null) {
                $instance->discountedUnitPrice = ShopifyMoneyV2::fromArray($data['discountedUnitPrice']);
            }
            if (isset($data['discountedUnitPriceSet']) && $data['discountedUnitPriceSet'] !== null) {
                $instance->discountedUnitPriceSet = ShopifyMoneyBag::fromArray($data['discountedUnitPriceSet']);
            }
            if (isset($data['fulfillmentService']) && $data['fulfillmentService'] !== null) {
                $instance->fulfillmentService = ShopifyFulfillmentService::fromArray($data['fulfillmentService']);
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = ShopifyImage::fromArray($data['image']);
            }
            if (isset($data['isGiftCard']) && $data['isGiftCard'] !== null) {
                $instance->isGiftCard = $data['isGiftCard'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['originalTotal']) && $data['originalTotal'] !== null) {
                $instance->originalTotal = ShopifyMoneyV2::fromArray($data['originalTotal']);
            }
            if (isset($data['originalTotalSet']) && $data['originalTotalSet'] !== null) {
                $instance->originalTotalSet = ShopifyMoneyBag::fromArray($data['originalTotalSet']);
            }
            if (isset($data['originalUnitPrice']) && $data['originalUnitPrice'] !== null) {
                $instance->originalUnitPrice = ShopifyMoneyV2::fromArray($data['originalUnitPrice']);
            }
            if (isset($data['originalUnitPriceSet']) && $data['originalUnitPriceSet'] !== null) {
                $instance->originalUnitPriceSet = ShopifyMoneyBag::fromArray($data['originalUnitPriceSet']);
            }
            if (isset($data['originalUnitPriceWithCurrency']) && $data['originalUnitPriceWithCurrency'] !== null) {
                $instance->originalUnitPriceWithCurrency = ShopifyMoneyV2::fromArray($data['originalUnitPriceWithCurrency']);
            }
            if (isset($data['priceOverride']) && $data['priceOverride'] !== null) {
                $instance->priceOverride = ShopifyMoneyV2::fromArray($data['priceOverride']);
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = ShopifyProduct::fromArray($data['product']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['requiresShipping']) && $data['requiresShipping'] !== null) {
                $instance->requiresShipping = $data['requiresShipping'];
            }
            if (isset($data['sku']) && $data['sku'] !== null) {
                $instance->sku = $data['sku'];
            }
            if (isset($data['taxable']) && $data['taxable'] !== null) {
                $instance->taxable = $data['taxable'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['totalDiscount']) && $data['totalDiscount'] !== null) {
                $instance->totalDiscount = ShopifyMoneyV2::fromArray($data['totalDiscount']);
            }
            if (isset($data['totalDiscountSet']) && $data['totalDiscountSet'] !== null) {
                $instance->totalDiscountSet = ShopifyMoneyBag::fromArray($data['totalDiscountSet']);
            }
            if (isset($data['uuid']) && $data['uuid'] !== null) {
                $instance->uuid = $data['uuid'];
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
            if ($this->appliedDiscount !== null) {
                $data['appliedDiscount'] = $this->appliedDiscount->asArray();
            }
            if ($this->approximateDiscountedUnitPriceSet !== null) {
                $data['approximateDiscountedUnitPriceSet'] = $this->approximateDiscountedUnitPriceSet->asArray();
            }
            if ($this->bundleComponents !== null) {
                $data['bundleComponents'] = array_map(function($item) { return $item->asArray(); }, $this->bundleComponents);
            }
            if ($this->components !== null) {
                $data['components'] = array_map(function($item) { return $item->asArray(); }, $this->components);
            }
            if ($this->custom !== null) {
                $data['custom'] = $this->custom;
            }
            if ($this->customAttributes !== null) {
                $data['customAttributes'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributes);
            }
            if ($this->customAttributesV2 !== null) {
                $data['customAttributesV2'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributesV2);
            }
            if ($this->discountedTotal !== null) {
                $data['discountedTotal'] = $this->discountedTotal->asArray();
            }
            if ($this->discountedTotalSet !== null) {
                $data['discountedTotalSet'] = $this->discountedTotalSet->asArray();
            }
            if ($this->discountedUnitPrice !== null) {
                $data['discountedUnitPrice'] = $this->discountedUnitPrice->asArray();
            }
            if ($this->discountedUnitPriceSet !== null) {
                $data['discountedUnitPriceSet'] = $this->discountedUnitPriceSet->asArray();
            }
            if ($this->fulfillmentService !== null) {
                $data['fulfillmentService'] = $this->fulfillmentService->asArray();
            }
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            if ($this->isGiftCard !== null) {
                $data['isGiftCard'] = $this->isGiftCard;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->originalTotal !== null) {
                $data['originalTotal'] = $this->originalTotal->asArray();
            }
            if ($this->originalTotalSet !== null) {
                $data['originalTotalSet'] = $this->originalTotalSet->asArray();
            }
            if ($this->originalUnitPrice !== null) {
                $data['originalUnitPrice'] = $this->originalUnitPrice->asArray();
            }
            if ($this->originalUnitPriceSet !== null) {
                $data['originalUnitPriceSet'] = $this->originalUnitPriceSet->asArray();
            }
            if ($this->originalUnitPriceWithCurrency !== null) {
                $data['originalUnitPriceWithCurrency'] = $this->originalUnitPriceWithCurrency->asArray();
            }
            if ($this->priceOverride !== null) {
                $data['priceOverride'] = $this->priceOverride->asArray();
            }
            if ($this->product !== null) {
                $data['product'] = $this->product->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->requiresShipping !== null) {
                $data['requiresShipping'] = $this->requiresShipping;
            }
            if ($this->sku !== null) {
                $data['sku'] = $this->sku;
            }
            if ($this->taxable !== null) {
                $data['taxable'] = $this->taxable;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->totalDiscount !== null) {
                $data['totalDiscount'] = $this->totalDiscount->asArray();
            }
            if ($this->totalDiscountSet !== null) {
                $data['totalDiscountSet'] = $this->totalDiscountSet->asArray();
            }
            if ($this->uuid !== null) {
                $data['uuid'] = $this->uuid;
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
