<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductBundleComponentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyComponentizedProductsBundleConsolidatedOption;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyTaxonomyCategory;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCollectionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCombinedListing;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductCompareAtPriceRange;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductContextualPricing;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMediaHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMedia;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyResourceFeedback;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyImageConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMediaConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductOption;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductPriceRange;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductPriceRangeV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductCategory;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductComponentTypeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductPublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyResourcePublicationV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyResourcePublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyResourcePublicationV2Connection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyRestrictedForResource;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySellingPlanGroupConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySEO;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyStandardizedProductType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyTranslation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyChannelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductVariantConnection;

/**
 * The `Product` object lets you manage products in a merchant’s store.
 *
 * Products are the goods and services that merchants offer to customers. They can include various details such as title, description, price, images, and options such as size or color.
 * You can use [product variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/productvariant) to create or update different versions of the same product.
 * You can also add or update product [media](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/media).
 * Products can be organized by grouping them into a [collection](https://shopify.dev/docs/api/admin-graphql/latest/objects/collection).
 *
 * Learn more about working with [Shopify's product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/product-model-components),
 * including limitations and considerations.
 */
class ShopifyProduct implements ShopifyHasEvents, ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyHasPublishedTranslations, ShopifyLegacyInteroperability, ShopifyNavigable, ShopifyNode, ShopifyOnlineStorePreviewable, ShopifyPublishable
{
    protected $availablePublicationsCount;
    protected $bodyHtml;
    protected $bundleComponents;
    protected $bundleConsolidatedOptions;
    protected $category;
    protected $collections;
    protected $combinedListing;
    protected $combinedListingRole;
    protected $compareAtPriceRange;
    protected $contextualPricing;
    protected $createdAt;
    protected $customProductType;
    protected $defaultCursor;
    protected $description;
    protected $descriptionHtml;
    protected $descriptionPlainSummary;
    protected $events;
    protected $featuredImage;
    protected $featuredMedia;
    protected $feedback;
    protected $giftCardTemplateSuffix;
    protected $handle;
    protected $hasOnlyDefaultVariant;
    protected $hasOutOfStockVariants;
    protected $hasVariantsThatRequiresComponents;
    protected $id;
    protected $images;
    protected $inCollection;
    protected $isGiftCard;
    protected $legacyResourceId;
    protected $media;
    protected $mediaCount;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $onlineStorePreviewUrl;
    protected $onlineStoreUrl;
    protected $options;
    protected $priceRange;
    protected $priceRangeV2;
    protected $productCategory;
    protected $productComponents;
    protected $productComponentsCount;
    protected $productParents;
    protected $productPublications;
    protected $productType;
    protected $publicationCount;
    protected $publications;
    protected $publishedAt;
    protected $publishedInContext;
    protected $publishedOnChannel;
    protected $publishedOnCurrentChannel;
    protected $publishedOnCurrentPublication;
    protected $publishedOnPublication;
    protected $requiresSellingPlan;
    protected $resourcePublicationOnCurrentPublication;
    protected $resourcePublications;
    protected $resourcePublicationsCount;
    protected $resourcePublicationsV2;
    protected $restrictedForResource;
    protected $sellingPlanGroupCount;
    protected $sellingPlanGroups;
    protected $sellingPlanGroupsCount;
    protected $seo;
    protected $standardizedProductType;
    protected $status;
    protected $storefrontId;
    protected $tags;
    protected $templateSuffix;
    protected $title;
    protected $totalInventory;
    protected $totalVariants;
    protected $tracksInventory;
    protected $translations;
    protected $unpublishedChannels;
    protected $unpublishedPublications;
    protected $updatedAt;
    protected $variants;
    protected $variantsCount;
    protected $vendor;

    
    /**
     * The number of
     * [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that a resource is published to, without
     * [feedback errors](https://shopify.dev/docs/api/admin-graphql/latest/objects/ResourceFeedback).
     *
     * @return ShopifyCount
     */
    public function getAvailablePublicationsCount(): ?ShopifyCount
    {
        return $this->availablePublicationsCount;
    }

    
    /**
     * The description of the product, with
     * HTML tags. For example, the description might include
     * bold `<strong></strong>` and italic `<i></i>` text.
     *
     * @return string
     */
    public function getBodyHtml(): ?string
    {
        return $this->bodyHtml;
    }

    
    /**
     * A list of [components](https://shopify.dev/docs/apps/build/product-merchandising/bundles/add-product-fixed-bundle)
     * that are associated with a product in a bundle.
     *
     * @return ShopifyProductBundleComponentConnection
     */
    public function getBundleComponents(): ?ShopifyProductBundleComponentConnection
    {
        return $this->bundleComponents;
    }

    
    /**
     * A list of consolidated options for a product in a bundle.
     *
     * @return ShopifyComponentizedProductsBundleConsolidatedOption[]
     */
    public function getBundleConsolidatedOptions(): ?array
    {
        return $this->bundleConsolidatedOptions;
    }

    
    /**
     * The category of a product
     * from [Shopify's Standard Product Taxonomy](https://shopify.github.io/product-taxonomy/releases/unstable/?categoryId=sg-4-17-2-17).
     *
     * @return ShopifyTaxonomyCategory
     */
    public function getCategory(): ?ShopifyTaxonomyCategory
    {
        return $this->category;
    }

    
    /**
     * A list of [collections](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection)
     * that include the product.
     *
     * @return ShopifyCollectionConnection
     */
    public function getCollections(): ?ShopifyCollectionConnection
    {
        return $this->collections;
    }

    
    /**
     * A special product type that combines separate products from a store into a single product listing.
     * [Combined listings](https://shopify.dev/apps/build/product-merchandising/combined-listings) are connected
     * by a shared option, such as color, model, or dimension.
     *
     * @return ShopifyCombinedListing
     */
    public function getCombinedListing(): ?ShopifyCombinedListing
    {
        return $this->combinedListing;
    }

    
    /**
     * The [role of the product](https://shopify.dev/docs/apps/build/product-merchandising/combined-listings/build-for-combined-listings)
     * in a combined listing.
     *
     * If `null`, then the product isn't part of any combined listing.
     *
     * @return string A ShopifyCombinedListingsRoleEnumObject value
     */
    public function getCombinedListingRole(): ?string
    {
        return $this->combinedListingRole;
    }

    
    /**
     * The [compare-at price range](https://help.shopify.com/manual/products/details/product-pricing/sale-pricing)
     * of the product in the shop's default currency.
     *
     * @return ShopifyProductCompareAtPriceRange
     */
    public function getCompareAtPriceRange(): ?ShopifyProductCompareAtPriceRange
    {
        return $this->compareAtPriceRange;
    }

    
    /**
     * The pricing that applies to a customer in a specific context. For example, a price might vary depending on the customer's location. Only active markets are considered in the price resolution.
     *
     * @return ShopifyProductContextualPricing
     */
    public function getContextualPricing(): ?ShopifyProductContextualPricing
    {
        return $this->contextualPricing;
    }

    
    /**
     * The date and time when the product was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The custom product type specified by the merchant.
     *
     * @return string
     */
    public function getCustomProductType(): ?string
    {
        return $this->customProductType;
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
     * A single-line description of the product,
     * with [HTML tags](https://developer.mozilla.org/en-US/docs/Web/HTML) removed.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The description of the product, with
     * HTML tags. For example, the description might include
     * bold `<strong></strong>` and italic `<i></i>` text.
     *
     * @return string
     */
    public function getDescriptionHtml(): mixed
    {
        return $this->descriptionHtml;
    }

    
    /**
     * Stripped description of the product, single line with HTML tags removed.
     * Truncated to 60 characters.
     *
     * @return string
     */
    public function getDescriptionPlainSummary(): ?string
    {
        return $this->descriptionPlainSummary;
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
     * The featured image for the product.
     *
     * @return ShopifyImage
     */
    public function getFeaturedImage(): ?ShopifyImage
    {
        return $this->featuredImage;
    }

    
    /**
     * The featured [media](https://shopify.dev/docs/apps/build/online-store/product-media)
     * associated with the product.
     *
     * @return ShopifyMedia
     */
    public function getFeaturedMedia(): ?ShopifyMedia
    {
        return $this->featuredMedia;
    }

    
    /**
     * The information that lets merchants know what steps they need to take
     * to make sure that the app is set up correctly.
     *
     * For example, if a merchant hasn't set up a product correctly in the app,
     * then the feedback might include a message that says "You need to add a price
     * to this product".
     *
     * @return ShopifyResourceFeedback
     */
    public function getFeedback(): ?ShopifyResourceFeedback
    {
        return $this->feedback;
    }

    
    /**
     * The [theme template](https://shopify.dev/docs/storefronts/themes/architecture/templates) that's used when customers view the gift card in a store.
     *
     * @return string
     */
    public function getGiftCardTemplateSuffix(): ?string
    {
        return $this->giftCardTemplateSuffix;
    }

    
    /**
     * A unique, human-readable string of the product's title. A handle can contain letters, hyphens (`-`), and numbers, but no spaces.
     * The handle is used in the online store URL for the product.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    
    /**
     * Whether the product has only a single variant with the default option and value.
     *
     * @return bool
     */
    public function getHasOnlyDefaultVariant(): ?bool
    {
        return $this->hasOnlyDefaultVariant;
    }

    
    /**
     * Whether the product has variants that are out of stock.
     *
     * @return bool
     */
    public function getHasOutOfStockVariants(): ?bool
    {
        return $this->hasOutOfStockVariants;
    }

    
    /**
     * Whether at least one of the product variants requires
     * [bundle components](https://shopify.dev/docs/apps/build/product-merchandising/bundles/add-product-fixed-bundle).
     *
     * Learn more about
     * [store eligibility for bundles](https://shopify.dev/docs/apps/build/product-merchandising/bundles#store-eligibility).
     *
     * @return bool
     */
    public function getHasVariantsThatRequiresComponents(): ?bool
    {
        return $this->hasVariantsThatRequiresComponents;
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
     * The images associated with the product.
     *
     * @return ShopifyImageConnection
     */
    public function getImages(): ?ShopifyImageConnection
    {
        return $this->images;
    }

    
    /**
     * Whether the product
     * is in a specified
     * [collection](https://shopify.dev/docs/api/admin-graphql/latest/objects/collection).
     *
     * @return bool
     */
    public function getInCollection(): ?bool
    {
        return $this->inCollection;
    }

    
    /**
     * Whether the product is a gift card.
     *
     * @return bool
     */
    public function getIsGiftCard(): ?bool
    {
        return $this->isGiftCard;
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
     * The [media](https://shopify.dev/docs/apps/build/online-store/product-media) associated with the product. Valid media are images, 3D models, videos.
     *
     * @return ShopifyMediaConnection
     */
    public function getMedia(): ?ShopifyMediaConnection
    {
        return $this->media;
    }

    
    /**
     * The total count of [media](https://shopify.dev/docs/apps/build/online-store/product-media)
     * that's associated with a product.
     *
     * @return ShopifyCount
     */
    public function getMediaCount(): ?ShopifyCount
    {
        return $this->mediaCount;
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
     * The [preview URL](https://help.shopify.com/manual/online-store/setting-up#preview-your-store) for the online store.
     *
     * @return string
     */
    public function getOnlineStorePreviewUrl(): mixed
    {
        return $this->onlineStorePreviewUrl;
    }

    
    /**
     * The product's URL on the online store.
     * If `null`, then the product isn't published to the online store sales channel.
     *
     * @return string
     */
    public function getOnlineStoreUrl(): mixed
    {
        return $this->onlineStoreUrl;
    }

    
    /**
     * A list of product options. The limit is defined by the
     * [shop's resource limits for product options](https://shopify.dev/docs/api/admin-graphql/latest/objects/Shop#field-resourcelimits) (`Shop.resourceLimits.maxProductOptions`).
     *
     * @return ShopifyProductOption[]
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    
    /**
     * The price range of the product.
     *
     * @return ShopifyProductPriceRange
     */
    public function getPriceRange(): ?ShopifyProductPriceRange
    {
        return $this->priceRange;
    }

    
    /**
     * The minimum and maximum prices of a product, expressed in decimal numbers.
     * For example, if the product is priced between $10.00 and $50.00,
     * then the price range is $10.00 - $50.00.
     *
     * @return ShopifyProductPriceRangeV2
     */
    public function getPriceRangeV2(): ?ShopifyProductPriceRangeV2
    {
        return $this->priceRangeV2;
    }

    
    /**
     * The product category specified by the merchant.
     *
     * @return ShopifyProductCategory
     */
    public function getProductCategory(): ?ShopifyProductCategory
    {
        return $this->productCategory;
    }

    
    /**
     * A list of products that contain at least one variant associated with
     * at least one of the current products' variants via group relationship.
     *
     * @return ShopifyProductComponentTypeConnection
     */
    public function getProductComponents(): ?ShopifyProductComponentTypeConnection
    {
        return $this->productComponents;
    }

    
    /**
     * A count of unique products that contain at least one variant associated with
     * at least one of the current products' variants via group relationship.
     *
     * @return ShopifyCount
     */
    public function getProductComponentsCount(): ?ShopifyCount
    {
        return $this->productComponentsCount;
    }

    
    /**
     * A list of products that has a variant that contains any of this product's variants as a component.
     *
     * @return ShopifyProductConnection
     */
    public function getProductParents(): ?ShopifyProductConnection
    {
        return $this->productParents;
    }

    
    /**
     * A list of the channels where the product is published.
     *
     * @return ShopifyProductPublicationConnection
     */
    public function getProductPublications(): ?ShopifyProductPublicationConnection
    {
        return $this->productPublications;
    }

    
    /**
     * The [product type](https://help.shopify.com/manual/products/details/product-type)
     * that merchants define.
     *
     * @return string
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }

    
    /**
     * The total number of
     * [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that a resource is published to, including publications with
     * [feedback errors](https://shopify.dev/docs/api/admin-graphql/latest/objects/ResourceFeedback).
     * To get a count that excludes publications with feedback errors, use `availablePublicationsCount`.
     *
     * @return int
     */
    public function getPublicationCount(): ?int
    {
        return $this->publicationCount;
    }

    
    /**
     * A list of the channels where the product is published.
     *
     * @return ShopifyProductPublicationConnection
     */
    public function getPublications(): ?ShopifyProductPublicationConnection
    {
        return $this->publications;
    }

    
    /**
     * The date and time when the product was published to the online store.
     *
     * @return Carbon
     */
    public function getPublishedAt(): ?Carbon
    {
        return $this->publishedAt;
    }

    
    /**
     * Whether the product is published for a customer only in a specified context. For example, a product might be published for a customer only in a specific location.
     *
     * @return bool
     */
    public function getPublishedInContext(): ?bool
    {
        return $this->publishedInContext;
    }

    
    /**
     * Whether the resource is published to a specific channel.
     *
     * @return bool
     */
    public function getPublishedOnChannel(): ?bool
    {
        return $this->publishedOnChannel;
    }

    
    /**
     * Whether the resource is published to a
     * [channel](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel).
     * For example, the resource might be published to the online store channel.
     *
     * @return bool
     */
    public function getPublishedOnCurrentChannel(): ?bool
    {
        return $this->publishedOnCurrentChannel;
    }

    
    /**
     * Whether the resource is published to the app's
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     * For example, the resource might be published to the app's online store channel.
     *
     * @return bool
     */
    public function getPublishedOnCurrentPublication(): ?bool
    {
        return $this->publishedOnCurrentPublication;
    }

    
    /**
     * Whether the resource is published to a specified
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     *
     * @return bool
     */
    public function getPublishedOnPublication(): ?bool
    {
        return $this->publishedOnPublication;
    }

    
    /**
     * Whether the product can only be purchased with
     * a [selling plan](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/selling-plans).
     * Products that are sold on subscription (`requiresSellingPlan: true`) can be updated only for online stores.
     * If you update a product to be subscription-only (`requiresSellingPlan: true`), then the product is unpublished from all channels, except the online store.
     *
     * @return bool
     */
    public function getRequiresSellingPlan(): ?bool
    {
        return $this->requiresSellingPlan;
    }

    
    /**
     * The resource that's either published or staged to be published to
     * the [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     *
     * @return ShopifyResourcePublicationV2
     */
    public function getResourcePublicationOnCurrentPublication(): ?ShopifyResourcePublicationV2
    {
        return $this->resourcePublicationOnCurrentPublication;
    }

    
    /**
     * The list of resources that are published to a
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     *
     * @return ShopifyResourcePublicationConnection
     */
    public function getResourcePublications(): ?ShopifyResourcePublicationConnection
    {
        return $this->resourcePublications;
    }

    
    /**
     * The total number of
     * [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that a resource is published to, including publications with
     * [feedback errors](https://shopify.dev/docs/api/admin-graphql/latest/objects/ResourceFeedback).
     * To get a count that excludes publications with feedback errors, use `availablePublicationsCount`.
     *
     * @return ShopifyCount
     */
    public function getResourcePublicationsCount(): ?ShopifyCount
    {
        return $this->resourcePublicationsCount;
    }

    
    /**
     * The list of resources that are either published or staged to be published to a
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     * By default, only publications to `APP` catalog types are returned.
     * For `Product` and `ProductVariant`, use the `catalogType` argument to retrieve
     * publications for other catalog types, such as `COMPANY_LOCATION` (B2B) or `MARKET`.
     * `Collection` only supports publications to `APP` catalog types.
     *
     * @return ShopifyResourcePublicationV2Connection
     */
    public function getResourcePublicationsV2(): ?ShopifyResourcePublicationV2Connection
    {
        return $this->resourcePublicationsV2;
    }

    
    /**
     * Whether the merchant can make changes to the product when they
     * [edit the order](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/edit-orders)
     * associated with the product. For example, a merchant might be restricted from changing product details when they
     * edit an order.
     *
     * @return ShopifyRestrictedForResource
     */
    public function getRestrictedForResource(): ?ShopifyRestrictedForResource
    {
        return $this->restrictedForResource;
    }

    
    /**
     * A count of [selling plan groups](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/selling-plans/build-a-selling-plan)
     * that are associated with the product.
     *
     * @return int
     */
    public function getSellingPlanGroupCount(): ?int
    {
        return $this->sellingPlanGroupCount;
    }

    
    /**
     * A list of all [selling plan groups](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/selling-plans/build-a-selling-plan)
     * that are associated with the product either directly, or through the product's variants.
     *
     * @return ShopifySellingPlanGroupConnection
     */
    public function getSellingPlanGroups(): ?ShopifySellingPlanGroupConnection
    {
        return $this->sellingPlanGroups;
    }

    
    /**
     * A count of [selling plan groups](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/selling-plans/build-a-selling-plan)
     * that are associated with the product.
     *
     * @return ShopifyCount
     */
    public function getSellingPlanGroupsCount(): ?ShopifyCount
    {
        return $this->sellingPlanGroupsCount;
    }

    
    /**
     * The [SEO title and description](https://help.shopify.com/manual/promoting-marketing/seo/adding-keywords)
     * that are associated with a product.
     *
     * @return ShopifySEO
     */
    public function getSeo(): ?ShopifySEO
    {
        return $this->seo;
    }

    
    /**
     * The standardized product type in the Shopify product taxonomy.
     *
     * @return ShopifyStandardizedProductType
     */
    public function getStandardizedProductType(): ?ShopifyStandardizedProductType
    {
        return $this->standardizedProductType;
    }

    
    /**
     * The [product status](https://help.shopify.com/manual/products/details/product-details-page#product-status),
     * which controls visibility across all sales channels.
     *
     * @return string A ShopifyProductStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The Storefront GraphQL API ID of the `Product`.
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
     * A comma-separated list of searchable keywords that are
     * associated with the product. For example, a merchant might apply the `sports`
     * and `summer` tags to products that are associated with sportwear for summer.
     *
     * Updating `tags` overwrites
     * any existing tags that were previously added to the product. To add new tags without overwriting
     * existing tags, use the [`tagsAdd`](https://shopify.dev/api/admin-graphql/latest/mutations/tagsadd)
     * mutation.
     *
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    
    /**
     * The [theme template](https://shopify.dev/docs/storefronts/themes/architecture/templates) that's used when customers view the product in a store.
     *
     * @return string
     */
    public function getTemplateSuffix(): ?string
    {
        return $this->templateSuffix;
    }

    
    /**
     * The name for the product that displays to customers. The title is used to construct the product's handle.
     * For example, if a product is titled "Black Sunglasses", then the handle is `black-sunglasses`.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The quantity of inventory that's in stock.
     *
     * @return int
     */
    public function getTotalInventory(): ?int
    {
        return $this->totalInventory;
    }

    
    /**
     * The number of [variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant)
     * that are associated with the product.
     *
     * @return int
     */
    public function getTotalVariants(): ?int
    {
        return $this->totalVariants;
    }

    
    /**
     * Whether [inventory tracking](https://help.shopify.com/manual/products/inventory/getting-started-with-inventory/set-up-inventory-tracking)
     * has been enabled for the product.
     *
     * @return bool
     */
    public function getTracksInventory(): ?bool
    {
        return $this->tracksInventory;
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
     * The list of channels that the resource is not published to.
     *
     * @return ShopifyChannelConnection
     */
    public function getUnpublishedChannels(): ?ShopifyChannelConnection
    {
        return $this->unpublishedChannels;
    }

    
    /**
     * The list of [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that the resource isn't published to.
     *
     * @return ShopifyPublicationConnection
     */
    public function getUnpublishedPublications(): ?ShopifyPublicationConnection
    {
        return $this->unpublishedPublications;
    }

    
    /**
     * The date and time when the product was last modified.
     * A product's `updatedAt` value can change for different reasons. For example, if an order
     * is placed for a product that has inventory tracking set up, then the inventory adjustment
     * is counted as an update.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    
    /**
     * A list of [variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) associated with the product.
     * If querying a single product at the root, you can fetch up to 2048 variants.
     *
     * @return ShopifyProductVariantConnection
     */
    public function getVariants(): ?ShopifyProductVariantConnection
    {
        return $this->variants;
    }

    
    /**
     * The number of [variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant)
     * that are associated with the product.
     *
     * @return ShopifyCount
     */
    public function getVariantsCount(): ?ShopifyCount
    {
        return $this->variantsCount;
    }

    
    /**
     * The name of the product's vendor.
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
            if (isset($data['availablePublicationsCount']) && $data['availablePublicationsCount'] !== null) {
                $instance->availablePublicationsCount = ShopifyCount::fromArray($data['availablePublicationsCount']);
            }
            if (isset($data['bodyHtml']) && $data['bodyHtml'] !== null) {
                $instance->bodyHtml = $data['bodyHtml'];
            }
            if (isset($data['bundleComponents']) && $data['bundleComponents'] !== null) {
                $instance->bundleComponents = ShopifyProductBundleComponentConnection::fromArray($data['bundleComponents']);
            }
            if (isset($data['bundleConsolidatedOptions']) && $data['bundleConsolidatedOptions'] !== null) {
                $instance->bundleConsolidatedOptions = array_map(function($item) { return ShopifyComponentizedProductsBundleConsolidatedOption::fromArray($item); }, $data['bundleConsolidatedOptions']);
            }
            if (isset($data['category']) && $data['category'] !== null) {
                $instance->category = ShopifyTaxonomyCategory::fromArray($data['category']);
            }
            if (isset($data['collections']) && $data['collections'] !== null) {
                $instance->collections = ShopifyCollectionConnection::fromArray($data['collections']);
            }
            if (isset($data['combinedListing']) && $data['combinedListing'] !== null) {
                $instance->combinedListing = ShopifyCombinedListing::fromArray($data['combinedListing']);
            }
            if (isset($data['combinedListingRole']) && $data['combinedListingRole'] !== null) {
                $instance->combinedListingRole = $data['combinedListingRole'];
            }
            if (isset($data['compareAtPriceRange']) && $data['compareAtPriceRange'] !== null) {
                $instance->compareAtPriceRange = ShopifyProductCompareAtPriceRange::fromArray($data['compareAtPriceRange']);
            }
            if (isset($data['contextualPricing']) && $data['contextualPricing'] !== null) {
                $instance->contextualPricing = ShopifyProductContextualPricing::fromArray($data['contextualPricing']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['customProductType']) && $data['customProductType'] !== null) {
                $instance->customProductType = $data['customProductType'];
            }
            if (isset($data['defaultCursor']) && $data['defaultCursor'] !== null) {
                $instance->defaultCursor = $data['defaultCursor'];
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['descriptionHtml']) && $data['descriptionHtml'] !== null) {
                $instance->descriptionHtml = $data['descriptionHtml'];
            }
            if (isset($data['descriptionPlainSummary']) && $data['descriptionPlainSummary'] !== null) {
                $instance->descriptionPlainSummary = $data['descriptionPlainSummary'];
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
            }
            if (isset($data['featuredImage']) && $data['featuredImage'] !== null) {
                $instance->featuredImage = ShopifyImage::fromArray($data['featuredImage']);
            }
            if (isset($data['featuredMedia']) && $data['featuredMedia'] !== null) {
                $instance->featuredMedia = ShopifyMediaHydrator::fromArray($data['featuredMedia']);
            }
            if (isset($data['feedback']) && $data['feedback'] !== null) {
                $instance->feedback = ShopifyResourceFeedback::fromArray($data['feedback']);
            }
            if (isset($data['giftCardTemplateSuffix']) && $data['giftCardTemplateSuffix'] !== null) {
                $instance->giftCardTemplateSuffix = $data['giftCardTemplateSuffix'];
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['hasOnlyDefaultVariant']) && $data['hasOnlyDefaultVariant'] !== null) {
                $instance->hasOnlyDefaultVariant = $data['hasOnlyDefaultVariant'];
            }
            if (isset($data['hasOutOfStockVariants']) && $data['hasOutOfStockVariants'] !== null) {
                $instance->hasOutOfStockVariants = $data['hasOutOfStockVariants'];
            }
            if (isset($data['hasVariantsThatRequiresComponents']) && $data['hasVariantsThatRequiresComponents'] !== null) {
                $instance->hasVariantsThatRequiresComponents = $data['hasVariantsThatRequiresComponents'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['images']) && $data['images'] !== null) {
                $instance->images = ShopifyImageConnection::fromArray($data['images']);
            }
            if (isset($data['inCollection']) && $data['inCollection'] !== null) {
                $instance->inCollection = $data['inCollection'];
            }
            if (isset($data['isGiftCard']) && $data['isGiftCard'] !== null) {
                $instance->isGiftCard = $data['isGiftCard'];
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['media']) && $data['media'] !== null) {
                $instance->media = ShopifyMediaConnection::fromArray($data['media']);
            }
            if (isset($data['mediaCount']) && $data['mediaCount'] !== null) {
                $instance->mediaCount = ShopifyCount::fromArray($data['mediaCount']);
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
            if (isset($data['onlineStorePreviewUrl']) && $data['onlineStorePreviewUrl'] !== null) {
                $instance->onlineStorePreviewUrl = $data['onlineStorePreviewUrl'];
            }
            if (isset($data['onlineStoreUrl']) && $data['onlineStoreUrl'] !== null) {
                $instance->onlineStoreUrl = $data['onlineStoreUrl'];
            }
            if (isset($data['options']) && $data['options'] !== null) {
                $instance->options = array_map(function($item) { return ShopifyProductOption::fromArray($item); }, $data['options']);
            }
            if (isset($data['priceRange']) && $data['priceRange'] !== null) {
                $instance->priceRange = ShopifyProductPriceRange::fromArray($data['priceRange']);
            }
            if (isset($data['priceRangeV2']) && $data['priceRangeV2'] !== null) {
                $instance->priceRangeV2 = ShopifyProductPriceRangeV2::fromArray($data['priceRangeV2']);
            }
            if (isset($data['productCategory']) && $data['productCategory'] !== null) {
                $instance->productCategory = ShopifyProductCategory::fromArray($data['productCategory']);
            }
            if (isset($data['productComponents']) && $data['productComponents'] !== null) {
                $instance->productComponents = ShopifyProductComponentTypeConnection::fromArray($data['productComponents']);
            }
            if (isset($data['productComponentsCount']) && $data['productComponentsCount'] !== null) {
                $instance->productComponentsCount = ShopifyCount::fromArray($data['productComponentsCount']);
            }
            if (isset($data['productParents']) && $data['productParents'] !== null) {
                $instance->productParents = ShopifyProductConnection::fromArray($data['productParents']);
            }
            if (isset($data['productPublications']) && $data['productPublications'] !== null) {
                $instance->productPublications = ShopifyProductPublicationConnection::fromArray($data['productPublications']);
            }
            if (isset($data['productType']) && $data['productType'] !== null) {
                $instance->productType = $data['productType'];
            }
            if (isset($data['publicationCount']) && $data['publicationCount'] !== null) {
                $instance->publicationCount = $data['publicationCount'];
            }
            if (isset($data['publications']) && $data['publications'] !== null) {
                $instance->publications = ShopifyProductPublicationConnection::fromArray($data['publications']);
            }
            if (isset($data['publishedAt']) && $data['publishedAt'] !== null) {
                $instance->publishedAt = new Carbon($data['publishedAt']);
            }
            if (isset($data['publishedInContext']) && $data['publishedInContext'] !== null) {
                $instance->publishedInContext = $data['publishedInContext'];
            }
            if (isset($data['publishedOnChannel']) && $data['publishedOnChannel'] !== null) {
                $instance->publishedOnChannel = $data['publishedOnChannel'];
            }
            if (isset($data['publishedOnCurrentChannel']) && $data['publishedOnCurrentChannel'] !== null) {
                $instance->publishedOnCurrentChannel = $data['publishedOnCurrentChannel'];
            }
            if (isset($data['publishedOnCurrentPublication']) && $data['publishedOnCurrentPublication'] !== null) {
                $instance->publishedOnCurrentPublication = $data['publishedOnCurrentPublication'];
            }
            if (isset($data['publishedOnPublication']) && $data['publishedOnPublication'] !== null) {
                $instance->publishedOnPublication = $data['publishedOnPublication'];
            }
            if (isset($data['requiresSellingPlan']) && $data['requiresSellingPlan'] !== null) {
                $instance->requiresSellingPlan = $data['requiresSellingPlan'];
            }
            if (isset($data['resourcePublicationOnCurrentPublication']) && $data['resourcePublicationOnCurrentPublication'] !== null) {
                $instance->resourcePublicationOnCurrentPublication = ShopifyResourcePublicationV2::fromArray($data['resourcePublicationOnCurrentPublication']);
            }
            if (isset($data['resourcePublications']) && $data['resourcePublications'] !== null) {
                $instance->resourcePublications = ShopifyResourcePublicationConnection::fromArray($data['resourcePublications']);
            }
            if (isset($data['resourcePublicationsCount']) && $data['resourcePublicationsCount'] !== null) {
                $instance->resourcePublicationsCount = ShopifyCount::fromArray($data['resourcePublicationsCount']);
            }
            if (isset($data['resourcePublicationsV2']) && $data['resourcePublicationsV2'] !== null) {
                $instance->resourcePublicationsV2 = ShopifyResourcePublicationV2Connection::fromArray($data['resourcePublicationsV2']);
            }
            if (isset($data['restrictedForResource']) && $data['restrictedForResource'] !== null) {
                $instance->restrictedForResource = ShopifyRestrictedForResource::fromArray($data['restrictedForResource']);
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
            if (isset($data['seo']) && $data['seo'] !== null) {
                $instance->seo = ShopifySEO::fromArray($data['seo']);
            }
            if (isset($data['standardizedProductType']) && $data['standardizedProductType'] !== null) {
                $instance->standardizedProductType = ShopifyStandardizedProductType::fromArray($data['standardizedProductType']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['storefrontId']) && $data['storefrontId'] !== null) {
                $instance->storefrontId = $data['storefrontId'];
            }
            if (isset($data['tags']) && $data['tags'] !== null) {
                $instance->tags = $data['tags'];
            }
            if (isset($data['templateSuffix']) && $data['templateSuffix'] !== null) {
                $instance->templateSuffix = $data['templateSuffix'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['totalInventory']) && $data['totalInventory'] !== null) {
                $instance->totalInventory = $data['totalInventory'];
            }
            if (isset($data['totalVariants']) && $data['totalVariants'] !== null) {
                $instance->totalVariants = $data['totalVariants'];
            }
            if (isset($data['tracksInventory']) && $data['tracksInventory'] !== null) {
                $instance->tracksInventory = $data['tracksInventory'];
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return ShopifyTranslation::fromArray($item); }, $data['translations']);
            }
            if (isset($data['unpublishedChannels']) && $data['unpublishedChannels'] !== null) {
                $instance->unpublishedChannels = ShopifyChannelConnection::fromArray($data['unpublishedChannels']);
            }
            if (isset($data['unpublishedPublications']) && $data['unpublishedPublications'] !== null) {
                $instance->unpublishedPublications = ShopifyPublicationConnection::fromArray($data['unpublishedPublications']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['variants']) && $data['variants'] !== null) {
                $instance->variants = ShopifyProductVariantConnection::fromArray($data['variants']);
            }
            if (isset($data['variantsCount']) && $data['variantsCount'] !== null) {
                $instance->variantsCount = ShopifyCount::fromArray($data['variantsCount']);
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
            if ($this->availablePublicationsCount !== null) {
                $data['availablePublicationsCount'] = $this->availablePublicationsCount->asArray();
            }
            if ($this->bodyHtml !== null) {
                $data['bodyHtml'] = $this->bodyHtml;
            }
            if ($this->bundleComponents !== null) {
                $data['bundleComponents'] = $this->bundleComponents->asArray();
            }
            if ($this->bundleConsolidatedOptions !== null) {
                $data['bundleConsolidatedOptions'] = array_map(function($item) { return $item->asArray(); }, $this->bundleConsolidatedOptions);
            }
            if ($this->category !== null) {
                $data['category'] = $this->category->asArray();
            }
            if ($this->collections !== null) {
                $data['collections'] = $this->collections->asArray();
            }
            if ($this->combinedListing !== null) {
                $data['combinedListing'] = $this->combinedListing->asArray();
            }
            if ($this->combinedListingRole !== null) {
                $data['combinedListingRole'] = $this->combinedListingRole;
            }
            if ($this->compareAtPriceRange !== null) {
                $data['compareAtPriceRange'] = $this->compareAtPriceRange->asArray();
            }
            if ($this->contextualPricing !== null) {
                $data['contextualPricing'] = $this->contextualPricing->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->customProductType !== null) {
                $data['customProductType'] = $this->customProductType;
            }
            if ($this->defaultCursor !== null) {
                $data['defaultCursor'] = $this->defaultCursor;
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->descriptionHtml !== null) {
                $data['descriptionHtml'] = $this->descriptionHtml;
            }
            if ($this->descriptionPlainSummary !== null) {
                $data['descriptionPlainSummary'] = $this->descriptionPlainSummary;
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->featuredImage !== null) {
                $data['featuredImage'] = $this->featuredImage->asArray();
            }
            if ($this->featuredMedia !== null) {
                $data['featuredMedia'] = ShopifyMediaHydrator::toArray($this->featuredMedia);
            }
            if ($this->feedback !== null) {
                $data['feedback'] = $this->feedback->asArray();
            }
            if ($this->giftCardTemplateSuffix !== null) {
                $data['giftCardTemplateSuffix'] = $this->giftCardTemplateSuffix;
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->hasOnlyDefaultVariant !== null) {
                $data['hasOnlyDefaultVariant'] = $this->hasOnlyDefaultVariant;
            }
            if ($this->hasOutOfStockVariants !== null) {
                $data['hasOutOfStockVariants'] = $this->hasOutOfStockVariants;
            }
            if ($this->hasVariantsThatRequiresComponents !== null) {
                $data['hasVariantsThatRequiresComponents'] = $this->hasVariantsThatRequiresComponents;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->images !== null) {
                $data['images'] = $this->images->asArray();
            }
            if ($this->inCollection !== null) {
                $data['inCollection'] = $this->inCollection;
            }
            if ($this->isGiftCard !== null) {
                $data['isGiftCard'] = $this->isGiftCard;
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->media !== null) {
                $data['media'] = $this->media->asArray();
            }
            if ($this->mediaCount !== null) {
                $data['mediaCount'] = $this->mediaCount->asArray();
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
            if ($this->onlineStorePreviewUrl !== null) {
                $data['onlineStorePreviewUrl'] = $this->onlineStorePreviewUrl;
            }
            if ($this->onlineStoreUrl !== null) {
                $data['onlineStoreUrl'] = $this->onlineStoreUrl;
            }
            if ($this->options !== null) {
                $data['options'] = array_map(function($item) { return $item->asArray(); }, $this->options);
            }
            if ($this->priceRange !== null) {
                $data['priceRange'] = $this->priceRange->asArray();
            }
            if ($this->priceRangeV2 !== null) {
                $data['priceRangeV2'] = $this->priceRangeV2->asArray();
            }
            if ($this->productCategory !== null) {
                $data['productCategory'] = $this->productCategory->asArray();
            }
            if ($this->productComponents !== null) {
                $data['productComponents'] = $this->productComponents->asArray();
            }
            if ($this->productComponentsCount !== null) {
                $data['productComponentsCount'] = $this->productComponentsCount->asArray();
            }
            if ($this->productParents !== null) {
                $data['productParents'] = $this->productParents->asArray();
            }
            if ($this->productPublications !== null) {
                $data['productPublications'] = $this->productPublications->asArray();
            }
            if ($this->productType !== null) {
                $data['productType'] = $this->productType;
            }
            if ($this->publicationCount !== null) {
                $data['publicationCount'] = $this->publicationCount;
            }
            if ($this->publications !== null) {
                $data['publications'] = $this->publications->asArray();
            }
            if ($this->publishedAt !== null) {
                $data['publishedAt'] = $this->publishedAt->toIso8601String();
            }
            if ($this->publishedInContext !== null) {
                $data['publishedInContext'] = $this->publishedInContext;
            }
            if ($this->publishedOnChannel !== null) {
                $data['publishedOnChannel'] = $this->publishedOnChannel;
            }
            if ($this->publishedOnCurrentChannel !== null) {
                $data['publishedOnCurrentChannel'] = $this->publishedOnCurrentChannel;
            }
            if ($this->publishedOnCurrentPublication !== null) {
                $data['publishedOnCurrentPublication'] = $this->publishedOnCurrentPublication;
            }
            if ($this->publishedOnPublication !== null) {
                $data['publishedOnPublication'] = $this->publishedOnPublication;
            }
            if ($this->requiresSellingPlan !== null) {
                $data['requiresSellingPlan'] = $this->requiresSellingPlan;
            }
            if ($this->resourcePublicationOnCurrentPublication !== null) {
                $data['resourcePublicationOnCurrentPublication'] = $this->resourcePublicationOnCurrentPublication->asArray();
            }
            if ($this->resourcePublications !== null) {
                $data['resourcePublications'] = $this->resourcePublications->asArray();
            }
            if ($this->resourcePublicationsCount !== null) {
                $data['resourcePublicationsCount'] = $this->resourcePublicationsCount->asArray();
            }
            if ($this->resourcePublicationsV2 !== null) {
                $data['resourcePublicationsV2'] = $this->resourcePublicationsV2->asArray();
            }
            if ($this->restrictedForResource !== null) {
                $data['restrictedForResource'] = $this->restrictedForResource->asArray();
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
            if ($this->seo !== null) {
                $data['seo'] = $this->seo->asArray();
            }
            if ($this->standardizedProductType !== null) {
                $data['standardizedProductType'] = $this->standardizedProductType->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->storefrontId !== null) {
                $data['storefrontId'] = $this->storefrontId;
            }
            if ($this->tags !== null) {
                $data['tags'] = $this->tags;
            }
            if ($this->templateSuffix !== null) {
                $data['templateSuffix'] = $this->templateSuffix;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->totalInventory !== null) {
                $data['totalInventory'] = $this->totalInventory;
            }
            if ($this->totalVariants !== null) {
                $data['totalVariants'] = $this->totalVariants;
            }
            if ($this->tracksInventory !== null) {
                $data['tracksInventory'] = $this->tracksInventory;
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            if ($this->unpublishedChannels !== null) {
                $data['unpublishedChannels'] = $this->unpublishedChannels->asArray();
            }
            if ($this->unpublishedPublications !== null) {
                $data['unpublishedPublications'] = $this->unpublishedPublications->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->variants !== null) {
                $data['variants'] = $this->variants->asArray();
            }
            if ($this->variantsCount !== null) {
                $data['variantsCount'] = $this->variantsCount->asArray();
            }
            if ($this->vendor !== null) {
                $data['vendor'] = $this->vendor;
            }
            return $data;
        }
}
