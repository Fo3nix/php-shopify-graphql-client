<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFulfillmentService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyGiftCard;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTaxLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductVariant;

/**
 * Contains information about an item in the exchange.
 */
class ShopifyExchangeV2LineItem
{
    protected $customAttributes;
    protected $discountedTotalSet;
    protected $discountedUnitPriceSet;
    protected $fulfillmentService;
    protected $giftCard;
    protected $giftCards;
    protected $isGiftCard;
    protected $lineItem;
    protected $name;
    protected $originalTotalSet;
    protected $originalUnitPriceSet;
    protected $quantity;
    protected $requiresShipping;
    protected $sku;
    protected $taxLines;
    protected $taxable;
    protected $title;
    protected $variant;
    protected $variantTitle;
    protected $vendor;

    
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
     * The total line price, in shop and presentment currencies, after discounts are applied.
     *
     * @return ShopifyMoneyBag
     */
    public function getDiscountedTotalSet(): ?ShopifyMoneyBag
    {
        return $this->discountedTotalSet;
    }

    
    /**
     * The price, in shop and presentment currencies,
     * of a single variant unit after line item discounts are applied.
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
     * Indicates if this line item is a gift card.
     *
     * @return bool
     */
    public function getGiftCard(): ?bool
    {
        return $this->giftCard;
    }

    
    /**
     * The gift cards associated with the line item.
     *
     * @return ShopifyGiftCard[]
     */
    public function getGiftCards(): ?array
    {
        return $this->giftCards;
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
     * The line item associated with this object.
     *
     * @return ShopifyLineItem
     */
    public function getLineItem(): ?ShopifyLineItem
    {
        return $this->lineItem;
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
     * The total price, in shop and presentment currencies, before discounts are applied.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalTotalSet(): ?ShopifyMoneyBag
    {
        return $this->originalTotalSet;
    }

    
    /**
     * The price, in shop and presentment currencies,
     * of a single variant unit before line item discounts are applied.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalUnitPriceSet(): ?ShopifyMoneyBag
    {
        return $this->originalUnitPriceSet;
    }

    
    /**
     * The number of products that were purchased.
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
     * The TaxLine object connected to this line item.
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
     * The title of the product or variant. This field only applies to custom line items.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The product variant of the line item.
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
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return ShopifyAttribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['discountedTotalSet']) && $data['discountedTotalSet'] !== null) {
                $instance->discountedTotalSet = ShopifyMoneyBag::fromArray($data['discountedTotalSet']);
            }
            if (isset($data['discountedUnitPriceSet']) && $data['discountedUnitPriceSet'] !== null) {
                $instance->discountedUnitPriceSet = ShopifyMoneyBag::fromArray($data['discountedUnitPriceSet']);
            }
            if (isset($data['fulfillmentService']) && $data['fulfillmentService'] !== null) {
                $instance->fulfillmentService = ShopifyFulfillmentService::fromArray($data['fulfillmentService']);
            }
            if (isset($data['giftCard']) && $data['giftCard'] !== null) {
                $instance->giftCard = $data['giftCard'];
            }
            if (isset($data['giftCards']) && $data['giftCards'] !== null) {
                $instance->giftCards = array_map(function($item) { return ShopifyGiftCard::fromArray($item); }, $data['giftCards']);
            }
            if (isset($data['isGiftCard']) && $data['isGiftCard'] !== null) {
                $instance->isGiftCard = $data['isGiftCard'];
            }
            if (isset($data['lineItem']) && $data['lineItem'] !== null) {
                $instance->lineItem = ShopifyLineItem::fromArray($data['lineItem']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['originalTotalSet']) && $data['originalTotalSet'] !== null) {
                $instance->originalTotalSet = ShopifyMoneyBag::fromArray($data['originalTotalSet']);
            }
            if (isset($data['originalUnitPriceSet']) && $data['originalUnitPriceSet'] !== null) {
                $instance->originalUnitPriceSet = ShopifyMoneyBag::fromArray($data['originalUnitPriceSet']);
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
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return ShopifyTaxLine::fromArray($item); }, $data['taxLines']);
            }
            if (isset($data['taxable']) && $data['taxable'] !== null) {
                $instance->taxable = $data['taxable'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
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
            if ($this->customAttributes !== null) {
                $data['customAttributes'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributes);
            }
            if ($this->discountedTotalSet !== null) {
                $data['discountedTotalSet'] = $this->discountedTotalSet->asArray();
            }
            if ($this->discountedUnitPriceSet !== null) {
                $data['discountedUnitPriceSet'] = $this->discountedUnitPriceSet->asArray();
            }
            if ($this->fulfillmentService !== null) {
                $data['fulfillmentService'] = $this->fulfillmentService->asArray();
            }
            if ($this->giftCard !== null) {
                $data['giftCard'] = $this->giftCard;
            }
            if ($this->giftCards !== null) {
                $data['giftCards'] = array_map(function($item) { return $item->asArray(); }, $this->giftCards);
            }
            if ($this->isGiftCard !== null) {
                $data['isGiftCard'] = $this->isGiftCard;
            }
            if ($this->lineItem !== null) {
                $data['lineItem'] = $this->lineItem->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->originalTotalSet !== null) {
                $data['originalTotalSet'] = $this->originalTotalSet->asArray();
            }
            if ($this->originalUnitPriceSet !== null) {
                $data['originalUnitPriceSet'] = $this->originalUnitPriceSet->asArray();
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
            if ($this->taxLines !== null) {
                $data['taxLines'] = array_map(function($item) { return $item->asArray(); }, $this->taxLines);
            }
            if ($this->taxable !== null) {
                $data['taxable'] = $this->taxable;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
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
