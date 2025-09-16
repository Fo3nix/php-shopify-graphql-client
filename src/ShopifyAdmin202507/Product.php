<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductBundleComponentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\TaxonomyCategory;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CollectionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CombinedListing;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductCompareAtPriceRange;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductContextualPricing;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\EventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Image;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ResourceFeedback;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ImageConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MediaConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Metafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductOption;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductPriceRange;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductPriceRangeV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductCategory;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductComponentTypeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductPublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ResourcePublicationV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ResourcePublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ResourcePublicationV2Connection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\RestrictedForResource;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SellingPlanGroupConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SEO;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StandardizedProductType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Translation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ChannelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductVariantConnection;

class Product
{
    protected $availablePublicationsCount;
    protected $bodyHtml;
    protected $bundleComponents;
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
     * @return Count
     */
    public function getAvailablePublicationsCount()
    {
        return $this->availablePublicationsCount;
    }

    
    /**
     * @return string
     */
    public function getBodyHtml()
    {
        return $this->bodyHtml;
    }

    
    /**
     * @return ProductBundleComponentConnection
     */
    public function getBundleComponents()
    {
        return $this->bundleComponents;
    }

    
    /**
     * @return TaxonomyCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    
    /**
     * @return CollectionConnection
     */
    public function getCollections()
    {
        return $this->collections;
    }

    
    /**
     * @return CombinedListing
     */
    public function getCombinedListing()
    {
        return $this->combinedListing;
    }

    
    /**
     * @return CombinedListingsRoleEnumObject
     */
    public function getCombinedListingRole()
    {
        return $this->combinedListingRole;
    }

    
    /**
     * @return ProductCompareAtPriceRange
     */
    public function getCompareAtPriceRange()
    {
        return $this->compareAtPriceRange;
    }

    
    /**
     * @return ProductContextualPricing
     */
    public function getContextualPricing()
    {
        return $this->contextualPricing;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return string
     */
    public function getCustomProductType()
    {
        return $this->customProductType;
    }

    
    /**
     * @return string
     */
    public function getDefaultCursor()
    {
        return $this->defaultCursor;
    }

    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    
    /**
     * @return string
     */
    public function getDescriptionHtml()
    {
        return $this->descriptionHtml;
    }

    
    /**
     * @return string
     */
    public function getDescriptionPlainSummary()
    {
        return $this->descriptionPlainSummary;
    }

    
    /**
     * @return EventConnection
     */
    public function getEvents()
    {
        return $this->events;
    }

    
    /**
     * @return Image
     */
    public function getFeaturedImage()
    {
        return $this->featuredImage;
    }

    
    /**
     * @return mixed
     */
    public function getFeaturedMedia()
    {
        return $this->featuredMedia;
    }

    
    /**
     * @return ResourceFeedback
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    
    /**
     * @return string
     */
    public function getGiftCardTemplateSuffix()
    {
        return $this->giftCardTemplateSuffix;
    }

    
    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    
    /**
     * @return bool
     */
    public function getHasOnlyDefaultVariant()
    {
        return $this->hasOnlyDefaultVariant;
    }

    
    /**
     * @return bool
     */
    public function getHasOutOfStockVariants()
    {
        return $this->hasOutOfStockVariants;
    }

    
    /**
     * @return bool
     */
    public function getHasVariantsThatRequiresComponents()
    {
        return $this->hasVariantsThatRequiresComponents;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ImageConnection
     */
    public function getImages()
    {
        return $this->images;
    }

    
    /**
     * @return bool
     */
    public function getInCollection()
    {
        return $this->inCollection;
    }

    
    /**
     * @return bool
     */
    public function getIsGiftCard()
    {
        return $this->isGiftCard;
    }

    
    /**
     * @return string
     */
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
    }

    
    /**
     * @return MediaConnection
     */
    public function getMedia()
    {
        return $this->media;
    }

    
    /**
     * @return Count
     */
    public function getMediaCount()
    {
        return $this->mediaCount;
    }

    
    /**
     * @return Metafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return MetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions()
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * @return MetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return string
     */
    public function getOnlineStorePreviewUrl()
    {
        return $this->onlineStorePreviewUrl;
    }

    
    /**
     * @return string
     */
    public function getOnlineStoreUrl()
    {
        return $this->onlineStoreUrl;
    }

    
    /**
     * @return ProductOption[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    
    /**
     * @return ProductPriceRange
     */
    public function getPriceRange()
    {
        return $this->priceRange;
    }

    
    /**
     * @return ProductPriceRangeV2
     */
    public function getPriceRangeV2()
    {
        return $this->priceRangeV2;
    }

    
    /**
     * @return ProductCategory
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    
    /**
     * @return ProductComponentTypeConnection
     */
    public function getProductComponents()
    {
        return $this->productComponents;
    }

    
    /**
     * @return Count
     */
    public function getProductComponentsCount()
    {
        return $this->productComponentsCount;
    }

    
    /**
     * @return ProductConnection
     */
    public function getProductParents()
    {
        return $this->productParents;
    }

    
    /**
     * @return ProductPublicationConnection
     */
    public function getProductPublications()
    {
        return $this->productPublications;
    }

    
    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    
    /**
     * @return int
     */
    public function getPublicationCount()
    {
        return $this->publicationCount;
    }

    
    /**
     * @return ProductPublicationConnection
     */
    public function getPublications()
    {
        return $this->publications;
    }

    
    /**
     * @return Carbon
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    
    /**
     * @return bool
     */
    public function getPublishedInContext()
    {
        return $this->publishedInContext;
    }

    
    /**
     * @return bool
     */
    public function getPublishedOnChannel()
    {
        return $this->publishedOnChannel;
    }

    
    /**
     * @return bool
     */
    public function getPublishedOnCurrentChannel()
    {
        return $this->publishedOnCurrentChannel;
    }

    
    /**
     * @return bool
     */
    public function getPublishedOnCurrentPublication()
    {
        return $this->publishedOnCurrentPublication;
    }

    
    /**
     * @return bool
     */
    public function getPublishedOnPublication()
    {
        return $this->publishedOnPublication;
    }

    
    /**
     * @return bool
     */
    public function getRequiresSellingPlan()
    {
        return $this->requiresSellingPlan;
    }

    
    /**
     * @return ResourcePublicationV2
     */
    public function getResourcePublicationOnCurrentPublication()
    {
        return $this->resourcePublicationOnCurrentPublication;
    }

    
    /**
     * @return ResourcePublicationConnection
     */
    public function getResourcePublications()
    {
        return $this->resourcePublications;
    }

    
    /**
     * @return Count
     */
    public function getResourcePublicationsCount()
    {
        return $this->resourcePublicationsCount;
    }

    
    /**
     * @return ResourcePublicationV2Connection
     */
    public function getResourcePublicationsV2()
    {
        return $this->resourcePublicationsV2;
    }

    
    /**
     * @return RestrictedForResource
     */
    public function getRestrictedForResource()
    {
        return $this->restrictedForResource;
    }

    
    /**
     * @return int
     */
    public function getSellingPlanGroupCount()
    {
        return $this->sellingPlanGroupCount;
    }

    
    /**
     * @return SellingPlanGroupConnection
     */
    public function getSellingPlanGroups()
    {
        return $this->sellingPlanGroups;
    }

    
    /**
     * @return Count
     */
    public function getSellingPlanGroupsCount()
    {
        return $this->sellingPlanGroupsCount;
    }

    
    /**
     * @return SEO
     */
    public function getSeo()
    {
        return $this->seo;
    }

    
    /**
     * @return StandardizedProductType
     */
    public function getStandardizedProductType()
    {
        return $this->standardizedProductType;
    }

    
    /**
     * @return ProductStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return string
     */
    public function getStorefrontId()
    {
        return $this->storefrontId;
    }

    
    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    
    /**
     * @return string
     */
    public function getTemplateSuffix()
    {
        return $this->templateSuffix;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    
    /**
     * @return int
     */
    public function getTotalInventory()
    {
        return $this->totalInventory;
    }

    
    /**
     * @return int
     */
    public function getTotalVariants()
    {
        return $this->totalVariants;
    }

    
    /**
     * @return bool
     */
    public function getTracksInventory()
    {
        return $this->tracksInventory;
    }

    
    /**
     * @return Translation[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    
    /**
     * @return ChannelConnection
     */
    public function getUnpublishedChannels()
    {
        return $this->unpublishedChannels;
    }

    
    /**
     * @return PublicationConnection
     */
    public function getUnpublishedPublications()
    {
        return $this->unpublishedPublications;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    
    /**
     * @return ProductVariantConnection
     */
    public function getVariants()
    {
        return $this->variants;
    }

    
    /**
     * @return Count
     */
    public function getVariantsCount()
    {
        return $this->variantsCount;
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
            if (isset($data['availablePublicationsCount']) && $data['availablePublicationsCount'] !== null) {
                $instance->availablePublicationsCount = Count::fromArray($data['availablePublicationsCount']);
            }
            if (isset($data['bodyHtml']) && $data['bodyHtml'] !== null) {
                $instance->bodyHtml = $data['bodyHtml'];
            }
            if (isset($data['bundleComponents']) && $data['bundleComponents'] !== null) {
                $instance->bundleComponents = ProductBundleComponentConnection::fromArray($data['bundleComponents']);
            }
            if (isset($data['category']) && $data['category'] !== null) {
                $instance->category = TaxonomyCategory::fromArray($data['category']);
            }
            if (isset($data['collections']) && $data['collections'] !== null) {
                $instance->collections = CollectionConnection::fromArray($data['collections']);
            }
            if (isset($data['combinedListing']) && $data['combinedListing'] !== null) {
                $instance->combinedListing = CombinedListing::fromArray($data['combinedListing']);
            }
            if (isset($data['combinedListingRole']) && $data['combinedListingRole'] !== null) {
                $instance->combinedListingRole = $data['combinedListingRole'];
            }
            if (isset($data['compareAtPriceRange']) && $data['compareAtPriceRange'] !== null) {
                $instance->compareAtPriceRange = ProductCompareAtPriceRange::fromArray($data['compareAtPriceRange']);
            }
            if (isset($data['contextualPricing']) && $data['contextualPricing'] !== null) {
                $instance->contextualPricing = ProductContextualPricing::fromArray($data['contextualPricing']);
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
                $instance->events = EventConnection::fromArray($data['events']);
            }
            if (isset($data['featuredImage']) && $data['featuredImage'] !== null) {
                $instance->featuredImage = Image::fromArray($data['featuredImage']);
            }
            if (isset($data['featuredMedia']) && $data['featuredMedia'] !== null) {
                $instance->featuredMedia = $data['featuredMedia'];
            }
            if (isset($data['feedback']) && $data['feedback'] !== null) {
                $instance->feedback = ResourceFeedback::fromArray($data['feedback']);
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
                $instance->images = ImageConnection::fromArray($data['images']);
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
                $instance->media = MediaConnection::fromArray($data['media']);
            }
            if (isset($data['mediaCount']) && $data['mediaCount'] !== null) {
                $instance->mediaCount = Count::fromArray($data['mediaCount']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = Metafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = MetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = MetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['onlineStorePreviewUrl']) && $data['onlineStorePreviewUrl'] !== null) {
                $instance->onlineStorePreviewUrl = $data['onlineStorePreviewUrl'];
            }
            if (isset($data['onlineStoreUrl']) && $data['onlineStoreUrl'] !== null) {
                $instance->onlineStoreUrl = $data['onlineStoreUrl'];
            }
            if (isset($data['options']) && $data['options'] !== null) {
                $instance->options = array_map(function($item) { return ProductOption::fromArray($item); }, $data['options']);
            }
            if (isset($data['priceRange']) && $data['priceRange'] !== null) {
                $instance->priceRange = ProductPriceRange::fromArray($data['priceRange']);
            }
            if (isset($data['priceRangeV2']) && $data['priceRangeV2'] !== null) {
                $instance->priceRangeV2 = ProductPriceRangeV2::fromArray($data['priceRangeV2']);
            }
            if (isset($data['productCategory']) && $data['productCategory'] !== null) {
                $instance->productCategory = ProductCategory::fromArray($data['productCategory']);
            }
            if (isset($data['productComponents']) && $data['productComponents'] !== null) {
                $instance->productComponents = ProductComponentTypeConnection::fromArray($data['productComponents']);
            }
            if (isset($data['productComponentsCount']) && $data['productComponentsCount'] !== null) {
                $instance->productComponentsCount = Count::fromArray($data['productComponentsCount']);
            }
            if (isset($data['productParents']) && $data['productParents'] !== null) {
                $instance->productParents = ProductConnection::fromArray($data['productParents']);
            }
            if (isset($data['productPublications']) && $data['productPublications'] !== null) {
                $instance->productPublications = ProductPublicationConnection::fromArray($data['productPublications']);
            }
            if (isset($data['productType']) && $data['productType'] !== null) {
                $instance->productType = $data['productType'];
            }
            if (isset($data['publicationCount']) && $data['publicationCount'] !== null) {
                $instance->publicationCount = $data['publicationCount'];
            }
            if (isset($data['publications']) && $data['publications'] !== null) {
                $instance->publications = ProductPublicationConnection::fromArray($data['publications']);
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
                $instance->resourcePublicationOnCurrentPublication = ResourcePublicationV2::fromArray($data['resourcePublicationOnCurrentPublication']);
            }
            if (isset($data['resourcePublications']) && $data['resourcePublications'] !== null) {
                $instance->resourcePublications = ResourcePublicationConnection::fromArray($data['resourcePublications']);
            }
            if (isset($data['resourcePublicationsCount']) && $data['resourcePublicationsCount'] !== null) {
                $instance->resourcePublicationsCount = Count::fromArray($data['resourcePublicationsCount']);
            }
            if (isset($data['resourcePublicationsV2']) && $data['resourcePublicationsV2'] !== null) {
                $instance->resourcePublicationsV2 = ResourcePublicationV2Connection::fromArray($data['resourcePublicationsV2']);
            }
            if (isset($data['restrictedForResource']) && $data['restrictedForResource'] !== null) {
                $instance->restrictedForResource = RestrictedForResource::fromArray($data['restrictedForResource']);
            }
            if (isset($data['sellingPlanGroupCount']) && $data['sellingPlanGroupCount'] !== null) {
                $instance->sellingPlanGroupCount = $data['sellingPlanGroupCount'];
            }
            if (isset($data['sellingPlanGroups']) && $data['sellingPlanGroups'] !== null) {
                $instance->sellingPlanGroups = SellingPlanGroupConnection::fromArray($data['sellingPlanGroups']);
            }
            if (isset($data['sellingPlanGroupsCount']) && $data['sellingPlanGroupsCount'] !== null) {
                $instance->sellingPlanGroupsCount = Count::fromArray($data['sellingPlanGroupsCount']);
            }
            if (isset($data['seo']) && $data['seo'] !== null) {
                $instance->seo = SEO::fromArray($data['seo']);
            }
            if (isset($data['standardizedProductType']) && $data['standardizedProductType'] !== null) {
                $instance->standardizedProductType = StandardizedProductType::fromArray($data['standardizedProductType']);
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
                $instance->translations = array_map(function($item) { return Translation::fromArray($item); }, $data['translations']);
            }
            if (isset($data['unpublishedChannels']) && $data['unpublishedChannels'] !== null) {
                $instance->unpublishedChannels = ChannelConnection::fromArray($data['unpublishedChannels']);
            }
            if (isset($data['unpublishedPublications']) && $data['unpublishedPublications'] !== null) {
                $instance->unpublishedPublications = PublicationConnection::fromArray($data['unpublishedPublications']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['variants']) && $data['variants'] !== null) {
                $instance->variants = ProductVariantConnection::fromArray($data['variants']);
            }
            if (isset($data['variantsCount']) && $data['variantsCount'] !== null) {
                $instance->variantsCount = Count::fromArray($data['variantsCount']);
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
                $data['featuredMedia'] = $this->featuredMedia;
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
