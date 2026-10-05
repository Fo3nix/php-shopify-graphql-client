<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductVariantBarcodeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductVariantContextualPricing;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDeliveryProfile;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMediaConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductVariantPricePairConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProduct;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductVariantComponentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyResourcePublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyResourcePublicationV2Connection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySelectedOption;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySellingPlanGroupConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyTranslation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyUnitPriceMeasurement;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyChannelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPublicationConnection;

class ShopifyProductVariant
{
    protected $availableForSale;
    protected $availablePublicationsCount;
    protected $barcode;
    protected $barcodes;
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
    protected $publicationCount;
    protected $publishedOnChannel;
    protected $publishedOnCurrentChannel;
    protected $publishedOnCurrentPublication;
    protected $publishedOnPublication;
    protected $requiresComponents;
    protected $resourcePublications;
    protected $resourcePublicationsCount;
    protected $resourcePublicationsV2;
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
    protected $unpublishedChannels;
    protected $unpublishedPublications;
    protected $updatedAt;

    
    /**
     * @return bool
     */
    public function getAvailableForSale()
    {
        return $this->availableForSale;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getAvailablePublicationsCount()
    {
        return $this->availablePublicationsCount;
    }

    
    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    
    /**
     * @return ShopifyProductVariantBarcodeConnection
     */
    public function getBarcodes()
    {
        return $this->barcodes;
    }

    
    /**
     * @return string
     */
    public function getCompareAtPrice()
    {
        return $this->compareAtPrice;
    }

    
    /**
     * @return ShopifyProductVariantContextualPricing
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
    public function getDefaultCursor()
    {
        return $this->defaultCursor;
    }

    
    /**
     * @return ShopifyDeliveryProfile
     */
    public function getDeliveryProfile()
    {
        return $this->deliveryProfile;
    }

    
    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    
    /**
     * @return ShopifyEventConnection
     */
    public function getEvents()
    {
        return $this->events;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyImage
     */
    public function getImage()
    {
        return $this->image;
    }

    
    /**
     * @return ShopifyInventoryItem
     */
    public function getInventoryItem()
    {
        return $this->inventoryItem;
    }

    
    /**
     * @return ShopifyProductVariantInventoryPolicyEnumObject
     */
    public function getInventoryPolicy()
    {
        return $this->inventoryPolicy;
    }

    
    /**
     * @return int
     */
    public function getInventoryQuantity()
    {
        return $this->inventoryQuantity;
    }

    
    /**
     * @return string
     */
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
    }

    
    /**
     * @return ShopifyMediaConnection
     */
    public function getMedia()
    {
        return $this->media;
    }

    
    /**
     * @return ShopifyMetafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions()
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    
    /**
     * @return ShopifyProductVariantPricePairConnection
     */
    public function getPresentmentPrices()
    {
        return $this->presentmentPrices;
    }

    
    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    
    /**
     * @return ShopifyProduct
     */
    public function getProduct()
    {
        return $this->product;
    }

    
    /**
     * @return ShopifyProductConnection
     */
    public function getProductParents()
    {
        return $this->productParents;
    }

    
    /**
     * @return ShopifyProductVariantComponentConnection
     */
    public function getProductVariantComponents()
    {
        return $this->productVariantComponents;
    }

    
    /**
     * @return int
     */
    public function getPublicationCount()
    {
        return $this->publicationCount;
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
    public function getRequiresComponents()
    {
        return $this->requiresComponents;
    }

    
    /**
     * @return ShopifyResourcePublicationConnection
     */
    public function getResourcePublications()
    {
        return $this->resourcePublications;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getResourcePublicationsCount()
    {
        return $this->resourcePublicationsCount;
    }

    
    /**
     * @return ShopifyResourcePublicationV2Connection
     */
    public function getResourcePublicationsV2()
    {
        return $this->resourcePublicationsV2;
    }

    
    /**
     * @return ShopifySelectedOption[]
     */
    public function getSelectedOptions()
    {
        return $this->selectedOptions;
    }

    
    /**
     * @return int
     */
    public function getSellableOnlineQuantity()
    {
        return $this->sellableOnlineQuantity;
    }

    
    /**
     * @return int
     */
    public function getSellingPlanGroupCount()
    {
        return $this->sellingPlanGroupCount;
    }

    
    /**
     * @return ShopifySellingPlanGroupConnection
     */
    public function getSellingPlanGroups()
    {
        return $this->sellingPlanGroups;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getSellingPlanGroupsCount()
    {
        return $this->sellingPlanGroupsCount;
    }

    
    /**
     * @return bool
     */
    public function getShowUnitPrice()
    {
        return $this->showUnitPrice;
    }

    
    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    
    /**
     * @return string
     */
    public function getStorefrontId()
    {
        return $this->storefrontId;
    }

    
    /**
     * @return string
     */
    public function getTaxCode()
    {
        return $this->taxCode;
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
     * @return ShopifyTranslation[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    
    /**
     * @return ShopifyUnitPriceMeasurement
     */
    public function getUnitPriceMeasurement()
    {
        return $this->unitPriceMeasurement;
    }

    
    /**
     * @return ShopifyChannelConnection
     */
    public function getUnpublishedChannels()
    {
        return $this->unpublishedChannels;
    }

    
    /**
     * @return ShopifyPublicationConnection
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
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['availableForSale']) && $data['availableForSale'] !== null) {
                $instance->availableForSale = $data['availableForSale'];
            }
            if (isset($data['availablePublicationsCount']) && $data['availablePublicationsCount'] !== null) {
                $instance->availablePublicationsCount = ShopifyCount::fromArray($data['availablePublicationsCount']);
            }
            if (isset($data['barcode']) && $data['barcode'] !== null) {
                $instance->barcode = $data['barcode'];
            }
            if (isset($data['barcodes']) && $data['barcodes'] !== null) {
                $instance->barcodes = ShopifyProductVariantBarcodeConnection::fromArray($data['barcodes']);
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
            if (isset($data['publicationCount']) && $data['publicationCount'] !== null) {
                $instance->publicationCount = $data['publicationCount'];
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
            if (isset($data['requiresComponents']) && $data['requiresComponents'] !== null) {
                $instance->requiresComponents = $data['requiresComponents'];
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
            if (isset($data['unpublishedChannels']) && $data['unpublishedChannels'] !== null) {
                $instance->unpublishedChannels = ShopifyChannelConnection::fromArray($data['unpublishedChannels']);
            }
            if (isset($data['unpublishedPublications']) && $data['unpublishedPublications'] !== null) {
                $instance->unpublishedPublications = ShopifyPublicationConnection::fromArray($data['unpublishedPublications']);
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
            if ($this->availablePublicationsCount !== null) {
                $data['availablePublicationsCount'] = $this->availablePublicationsCount->asArray();
            }
            if ($this->barcode !== null) {
                $data['barcode'] = $this->barcode;
            }
            if ($this->barcodes !== null) {
                $data['barcodes'] = $this->barcodes->asArray();
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
            if ($this->publicationCount !== null) {
                $data['publicationCount'] = $this->publicationCount;
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
            if ($this->requiresComponents !== null) {
                $data['requiresComponents'] = $this->requiresComponents;
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
            if ($this->unpublishedChannels !== null) {
                $data['unpublishedChannels'] = $this->unpublishedChannels->asArray();
            }
            if ($this->unpublishedPublications !== null) {
                $data['unpublishedPublications'] = $this->unpublishedPublications->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
