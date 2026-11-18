<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductVariantContextualPricing;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDeliveryProfile;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyInventoryItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMediaConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductVariantPricePairConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProduct;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductVariantComponentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySelectedOption;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySellingPlanGroupConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyTranslation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUnitPriceMeasurement;

/**
 * The `ProductVariant` object represents a version of a
 * [product](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product)
 * that comes in more than one [option](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOption),
 * such as size or color. For example, if a merchant sells t-shirts with options for size and color, then a small,
 * blue t-shirt would be one product variant and a large, blue t-shirt would be another.
 *
 * Use the `ProductVariant` object to manage the full lifecycle and configuration of a product's variants. Common
 * use cases for using the `ProductVariant` object include:
 *
 * - Tracking inventory for each variant
 * - Setting unique prices for each variant
 * - Assigning barcodes and SKUs to connect variants to fulfillment services
 * - Attaching variant-specific images and media
 * - Setting delivery and tax requirements
 * - Supporting product bundles, subscriptions, and selling plans
 *
 * A `ProductVariant` is associated with a parent
 * [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) object.
 * `ProductVariant` serves as the central link between a product's merchandising configuration, inventory,
 * pricing, fulfillment, and sales channels within the GraphQL Admin API schema. Each variant
 * can reference other GraphQL types such as:
 *
 * - [`InventoryItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem): Used for inventory tracking
 * - [`Image`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Image): Used for variant-specific images
 * - [`SellingPlanGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SellingPlanGroup): Used for subscriptions and selling plans
 *
 * Learn more about [Shopify's product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/product-model-components).
 */
class ShopifyProductVariant implements ShopifyHasEvents, ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyHasPublishedTranslations, ShopifyLegacyInteroperability, ShopifyNavigable, ShopifyNode
{
    protected $availableForSale;
    protected $barcode;
    protected $compareAtPrice;
    protected $contextualPricing;
    protected $createdAt;
    protected $defaultCursor;
    protected $deliveryProfile;
    protected $displayName;
    protected $events;
    protected $id;
    protected $image;
    protected $inventoryItem;
    protected $inventoryPolicy;
    protected $inventoryQuantity;
    protected $legacyResourceId;
    protected $media;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $position;
    protected $presentmentPrices;
    protected $price;
    protected $product;
    protected $productParents;
    protected $productVariantComponents;
    protected $requiresComponents;
    protected $selectedOptions;
    protected $sellableOnlineQuantity;
    protected $sellingPlanGroupCount;
    protected $sellingPlanGroups;
    protected $sellingPlanGroupsCount;
    protected $showUnitPrice;
    protected $sku;
    protected $storefrontId;
    protected $taxCode;
    protected $taxable;
    protected $title;
    protected $translations;
    protected $unitPrice;
    protected $unitPriceMeasurement;
    protected $updatedAt;

    
    /**
     * Whether the product variant is available for sale.
     *
     * @return bool
     */
    public function getAvailableForSale(): ?bool
    {
        return $this->availableForSale;
    }

    
    /**
     * The value of the barcode associated with the product.
     *
     * @return string
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    
    /**
     * The compare-at price of the variant in the default shop currency.
     *
     * @return string
     */
    public function getCompareAtPrice(): mixed
    {
        return $this->compareAtPrice;
    }

    
    /**
     * The pricing that applies for a customer in a given context. As of API version 2025-04, only active markets are considered in the price resolution.
     *
     * @return ShopifyProductVariantContextualPricing
     */
    public function getContextualPricing(): ?ShopifyProductVariantContextualPricing
    {
        return $this->contextualPricing;
    }

    
    /**
     * The date and time when the variant was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * A default [cursor](https://shopify.dev/api/usage/pagination-graphql) that returns the single next record, sorted ascending by ID.
     *
     * @return string
     */
    public function getDefaultCursor(): ?string
    {
        return $this->defaultCursor;
    }

    
    /**
     * The [delivery profile](https://shopify.dev/api/admin-graphql/latest/objects/DeliveryProfile) for the variant.
     *
     * @return ShopifyDeliveryProfile
     */
    public function getDeliveryProfile(): ?ShopifyDeliveryProfile
    {
        return $this->deliveryProfile;
    }

    
    /**
     * Display name of the variant, based on product's title + variant's title.
     *
     * @return string
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    
    /**
     * The paginated list of events associated with the host subject.
     *
     * @return ShopifyEventConnection
     */
    public function getEvents(): ?ShopifyEventConnection
    {
        return $this->events;
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
     * The featured image for the variant.
     *
     * @return ShopifyImage
     */
    public function getImage(): ?ShopifyImage
    {
        return $this->image;
    }

    
    /**
     * The inventory item, which is used to query for inventory information.
     *
     * @return ShopifyInventoryItem
     */
    public function getInventoryItem(): ?ShopifyInventoryItem
    {
        return $this->inventoryItem;
    }

    
    /**
     * Whether customers are allowed to place an order for the product variant when it's out of stock.
     *
     * @return string A ShopifyProductVariantInventoryPolicyEnumObject value
     */
    public function getInventoryPolicy(): ?string
    {
        return $this->inventoryPolicy;
    }

    
    /**
     * The total sellable quantity of the variant.
     *
     * @return int
     */
    public function getInventoryQuantity(): ?int
    {
        return $this->inventoryQuantity;
    }

    
    /**
     * The ID of the corresponding resource in the REST Admin API.
     *
     * @return string
     */
    public function getLegacyResourceId(): mixed
    {
        return $this->legacyResourceId;
    }

    
    /**
     * The media associated with the product variant.
     *
     * @return ShopifyMediaConnection
     */
    public function getMedia(): ?ShopifyMediaConnection
    {
        return $this->media;
    }

    
    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     *
     * @return ShopifyMetafield
     */
    public function getMetafield(): ?ShopifyMetafield
    {
        return $this->metafield;
    }

    
    /**
     * List of metafield definitions.
     *
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions(): ?ShopifyMetafieldDefinitionConnection
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     *
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields(): ?ShopifyMetafieldConnection
    {
        return $this->metafields;
    }

    
    /**
     * The order of the product variant in the list of product variants. The first position in the list is 1.
     *
     * @return int
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    
    /**
     * List of prices and compare-at prices in the presentment currencies for this shop.
     *
     * @return ShopifyProductVariantPricePairConnection
     */
    public function getPresentmentPrices(): ?ShopifyProductVariantPricePairConnection
    {
        return $this->presentmentPrices;
    }

    
    /**
     * The price of the product variant in the default shop currency.
     *
     * @return string
     */
    public function getPrice(): mixed
    {
        return $this->price;
    }

    
    /**
     * The product that this variant belongs to.
     *
     * @return ShopifyProduct
     */
    public function getProduct(): ?ShopifyProduct
    {
        return $this->product;
    }

    
    /**
     * A list of products that have product variants that contain this variant as a product component.
     *
     * @return ShopifyProductConnection
     */
    public function getProductParents(): ?ShopifyProductConnection
    {
        return $this->productParents;
    }

    
    /**
     * A list of the product variant components.
     *
     * @return ShopifyProductVariantComponentConnection
     */
    public function getProductVariantComponents(): ?ShopifyProductVariantComponentConnection
    {
        return $this->productVariantComponents;
    }

    
    /**
     * Whether a product variant requires components. The default value is `false`.
     * If `true`, then the product variant can only be purchased as a parent bundle with components and it will be omitted
     * from channels that don't support bundles.
     *
     * @return bool
     */
    public function getRequiresComponents(): ?bool
    {
        return $this->requiresComponents;
    }

    
    /**
     * List of product options applied to the variant.
     *
     * @return ShopifySelectedOption[]
     */
    public function getSelectedOptions(): ?array
    {
        return $this->selectedOptions;
    }

    
    /**
     * The total sellable quantity of the variant for online channels.
     * This doesn't represent the total available inventory or capture
     * [limitations based on customer location](https://help.shopify.com/manual/markets/inventory_and_fulfillment).
     *
     * @return int
     */
    public function getSellableOnlineQuantity(): ?int
    {
        return $this->sellableOnlineQuantity;
    }

    
    /**
     * Count of selling plan groups associated with the product variant.
     *
     * @return int
     */
    public function getSellingPlanGroupCount(): ?int
    {
        return $this->sellingPlanGroupCount;
    }

    
    /**
     * A list of all selling plan groups defined in the current shop associated with the product variant.
     *
     * @return ShopifySellingPlanGroupConnection
     */
    public function getSellingPlanGroups(): ?ShopifySellingPlanGroupConnection
    {
        return $this->sellingPlanGroups;
    }

    
    /**
     * Count of selling plan groups associated with the product variant.
     *
     * @return ShopifyCount
     */
    public function getSellingPlanGroupsCount(): ?ShopifyCount
    {
        return $this->sellingPlanGroupsCount;
    }

    
    /**
     * Whether to show the unit price for this product variant.
     *
     * @return bool
     */
    public function getShowUnitPrice(): ?bool
    {
        return $this->showUnitPrice;
    }

    
    /**
     * A case-sensitive identifier for the product variant in the shop.
     * Required in order to connect to a fulfillment service.
     *
     * @return string
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    
    /**
     * The Storefront GraphQL API ID of the `ProductVariant`.
     *
     * The Storefront GraphQL API will no longer return Base64 encoded IDs to match the behavior of the Admin GraphQL API. Therefore, you can safely use the `id` field's value instead.
     *
     * @return string
     */
    public function getStorefrontId(): mixed
    {
        return $this->storefrontId;
    }

    
    /**
     * Avalara tax code for the product variant. Applies only to the stores that have the Avalara AvaTax app installed.
     *
     * @return string
     */
    public function getTaxCode(): ?string
    {
        return $this->taxCode;
    }

    
    /**
     * Whether a tax is charged when the product variant is sold.
     *
     * @return bool
     */
    public function getTaxable(): ?bool
    {
        return $this->taxable;
    }

    
    /**
     * The title of the product variant.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The published translations associated with the resource.
     *
     * @return ShopifyTranslation[]
     */
    public function getTranslations(): ?array
    {
        return $this->translations;
    }

    
    /**
     * The unit price value for the variant based on the variant measurement.
     *
     * @return ShopifyMoneyV2
     */
    public function getUnitPrice(): ?ShopifyMoneyV2
    {
        return $this->unitPrice;
    }

    
    /**
     * The unit price measurement for the variant.
     *
     * @return ShopifyUnitPriceMeasurement
     */
    public function getUnitPriceMeasurement(): ?ShopifyUnitPriceMeasurement
    {
        return $this->unitPriceMeasurement;
    }

    
    /**
     * The date and time (ISO 8601 format) when the product variant was last modified.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['availableForSale']) && $data['availableForSale'] !== null) {
                $instance->availableForSale = $data['availableForSale'];
            }
            if (isset($data['barcode']) && $data['barcode'] !== null) {
                $instance->barcode = $data['barcode'];
            }
            if (isset($data['compareAtPrice']) && $data['compareAtPrice'] !== null) {
                $instance->compareAtPrice = $data['compareAtPrice'];
            }
            if (isset($data['contextualPricing']) && $data['contextualPricing'] !== null) {
                $instance->contextualPricing = ShopifyProductVariantContextualPricing::fromArray($data['contextualPricing']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['defaultCursor']) && $data['defaultCursor'] !== null) {
                $instance->defaultCursor = $data['defaultCursor'];
            }
            if (isset($data['deliveryProfile']) && $data['deliveryProfile'] !== null) {
                $instance->deliveryProfile = ShopifyDeliveryProfile::fromArray($data['deliveryProfile']);
            }
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = ShopifyImage::fromArray($data['image']);
            }
            if (isset($data['inventoryItem']) && $data['inventoryItem'] !== null) {
                $instance->inventoryItem = ShopifyInventoryItem::fromArray($data['inventoryItem']);
            }
            if (isset($data['inventoryPolicy']) && $data['inventoryPolicy'] !== null) {
                $instance->inventoryPolicy = $data['inventoryPolicy'];
            }
            if (isset($data['inventoryQuantity']) && $data['inventoryQuantity'] !== null) {
                $instance->inventoryQuantity = $data['inventoryQuantity'];
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['media']) && $data['media'] !== null) {
                $instance->media = ShopifyMediaConnection::fromArray($data['media']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = ShopifyMetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['position']) && $data['position'] !== null) {
                $instance->position = $data['position'];
            }
            if (isset($data['presentmentPrices']) && $data['presentmentPrices'] !== null) {
                $instance->presentmentPrices = ShopifyProductVariantPricePairConnection::fromArray($data['presentmentPrices']);
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = $data['price'];
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = ShopifyProduct::fromArray($data['product']);
            }
            if (isset($data['productParents']) && $data['productParents'] !== null) {
                $instance->productParents = ShopifyProductConnection::fromArray($data['productParents']);
            }
            if (isset($data['productVariantComponents']) && $data['productVariantComponents'] !== null) {
                $instance->productVariantComponents = ShopifyProductVariantComponentConnection::fromArray($data['productVariantComponents']);
            }
            if (isset($data['requiresComponents']) && $data['requiresComponents'] !== null) {
                $instance->requiresComponents = $data['requiresComponents'];
            }
            if (isset($data['selectedOptions']) && $data['selectedOptions'] !== null) {
                $instance->selectedOptions = array_map(function($item) { return ShopifySelectedOption::fromArray($item); }, $data['selectedOptions']);
            }
            if (isset($data['sellableOnlineQuantity']) && $data['sellableOnlineQuantity'] !== null) {
                $instance->sellableOnlineQuantity = $data['sellableOnlineQuantity'];
            }
            if (isset($data['sellingPlanGroupCount']) && $data['sellingPlanGroupCount'] !== null) {
                $instance->sellingPlanGroupCount = $data['sellingPlanGroupCount'];
            }
            if (isset($data['sellingPlanGroups']) && $data['sellingPlanGroups'] !== null) {
                $instance->sellingPlanGroups = ShopifySellingPlanGroupConnection::fromArray($data['sellingPlanGroups']);
            }
            if (isset($data['sellingPlanGroupsCount']) && $data['sellingPlanGroupsCount'] !== null) {
                $instance->sellingPlanGroupsCount = ShopifyCount::fromArray($data['sellingPlanGroupsCount']);
            }
            if (isset($data['showUnitPrice']) && $data['showUnitPrice'] !== null) {
                $instance->showUnitPrice = $data['showUnitPrice'];
            }
            if (isset($data['sku']) && $data['sku'] !== null) {
                $instance->sku = $data['sku'];
            }
            if (isset($data['storefrontId']) && $data['storefrontId'] !== null) {
                $instance->storefrontId = $data['storefrontId'];
            }
            if (isset($data['taxCode']) && $data['taxCode'] !== null) {
                $instance->taxCode = $data['taxCode'];
            }
            if (isset($data['taxable']) && $data['taxable'] !== null) {
                $instance->taxable = $data['taxable'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return ShopifyTranslation::fromArray($item); }, $data['translations']);
            }
            if (isset($data['unitPrice']) && $data['unitPrice'] !== null) {
                $instance->unitPrice = ShopifyMoneyV2::fromArray($data['unitPrice']);
            }
            if (isset($data['unitPriceMeasurement']) && $data['unitPriceMeasurement'] !== null) {
                $instance->unitPriceMeasurement = ShopifyUnitPriceMeasurement::fromArray($data['unitPriceMeasurement']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->availableForSale !== null) {
                $data['availableForSale'] = $this->availableForSale;
            }
            if ($this->barcode !== null) {
                $data['barcode'] = $this->barcode;
            }
            if ($this->compareAtPrice !== null) {
                $data['compareAtPrice'] = $this->compareAtPrice;
            }
            if ($this->contextualPricing !== null) {
                $data['contextualPricing'] = $this->contextualPricing->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->defaultCursor !== null) {
                $data['defaultCursor'] = $this->defaultCursor;
            }
            if ($this->deliveryProfile !== null) {
                $data['deliveryProfile'] = $this->deliveryProfile->asArray();
            }
            if ($this->displayName !== null) {
                $data['displayName'] = $this->displayName;
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            if ($this->inventoryItem !== null) {
                $data['inventoryItem'] = $this->inventoryItem->asArray();
            }
            if ($this->inventoryPolicy !== null) {
                $data['inventoryPolicy'] = $this->inventoryPolicy;
            }
            if ($this->inventoryQuantity !== null) {
                $data['inventoryQuantity'] = $this->inventoryQuantity;
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->media !== null) {
                $data['media'] = $this->media->asArray();
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafieldDefinitions !== null) {
                $data['metafieldDefinitions'] = $this->metafieldDefinitions->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->position !== null) {
                $data['position'] = $this->position;
            }
            if ($this->presentmentPrices !== null) {
                $data['presentmentPrices'] = $this->presentmentPrices->asArray();
            }
            if ($this->price !== null) {
                $data['price'] = $this->price;
            }
            if ($this->product !== null) {
                $data['product'] = $this->product->asArray();
            }
            if ($this->productParents !== null) {
                $data['productParents'] = $this->productParents->asArray();
            }
            if ($this->productVariantComponents !== null) {
                $data['productVariantComponents'] = $this->productVariantComponents->asArray();
            }
            if ($this->requiresComponents !== null) {
                $data['requiresComponents'] = $this->requiresComponents;
            }
            if ($this->selectedOptions !== null) {
                $data['selectedOptions'] = array_map(function($item) { return $item->asArray(); }, $this->selectedOptions);
            }
            if ($this->sellableOnlineQuantity !== null) {
                $data['sellableOnlineQuantity'] = $this->sellableOnlineQuantity;
            }
            if ($this->sellingPlanGroupCount !== null) {
                $data['sellingPlanGroupCount'] = $this->sellingPlanGroupCount;
            }
            if ($this->sellingPlanGroups !== null) {
                $data['sellingPlanGroups'] = $this->sellingPlanGroups->asArray();
            }
            if ($this->sellingPlanGroupsCount !== null) {
                $data['sellingPlanGroupsCount'] = $this->sellingPlanGroupsCount->asArray();
            }
            if ($this->showUnitPrice !== null) {
                $data['showUnitPrice'] = $this->showUnitPrice;
            }
            if ($this->sku !== null) {
                $data['sku'] = $this->sku;
            }
            if ($this->storefrontId !== null) {
                $data['storefrontId'] = $this->storefrontId;
            }
            if ($this->taxCode !== null) {
                $data['taxCode'] = $this->taxCode;
            }
            if ($this->taxable !== null) {
                $data['taxable'] = $this->taxable;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            if ($this->unitPrice !== null) {
                $data['unitPrice'] = $this->unitPrice->asArray();
            }
            if ($this->unitPriceMeasurement !== null) {
                $data['unitPriceMeasurement'] = $this->unitPriceMeasurement->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
