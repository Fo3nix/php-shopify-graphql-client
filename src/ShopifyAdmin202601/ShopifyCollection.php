<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCollectionOperations;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCount;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyResourceFeedback;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyProductConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCollectionPublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyResourcePublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyResourcePublicationV2Connection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCollectionRuleSet;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySEO;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyTranslation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyChannelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPublicationConnection;

class ShopifyCollection
{
    protected $activeOperations;
    protected $availablePublicationsCount;
    protected $createdAt;
    protected $description;
    protected $descriptionHtml;
    protected $events;
    protected $feedback;
    protected $handle;
    protected $hasProduct;
    protected $id;
    protected $image;
    protected $legacyResourceId;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $products;
    protected $productsCount;
    protected $publicationCount;
    protected $publications;
    protected $publishedOnChannel;
    protected $publishedOnCurrentChannel;
    protected $publishedOnCurrentPublication;
    protected $publishedOnPublication;
    protected $resourcePublications;
    protected $resourcePublicationsCount;
    protected $resourcePublicationsV2;
    protected $ruleSet;
    protected $seo;
    protected $sortOrder;
    protected $storefrontId;
    protected $templateSuffix;
    protected $title;
    protected $translations;
    protected $unpublishedChannels;
    protected $unpublishedPublications;
    protected $updatedAt;

    
    /**
     * @return ShopifyCollectionOperations
     */
    public function getActiveOperations()
    {
        return $this->activeOperations;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getAvailablePublicationsCount()
    {
        return $this->availablePublicationsCount;
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
     * @return ShopifyEventConnection
     */
    public function getEvents()
    {
        return $this->events;
    }

    
    /**
     * @return ShopifyResourceFeedback
     */
    public function getFeedback()
    {
        return $this->feedback;
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
    public function getHasProduct()
    {
        return $this->hasProduct;
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
     * @return string
     */
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
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
     * @return ShopifyProductConnection
     */
    public function getProducts()
    {
        return $this->products;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getProductsCount()
    {
        return $this->productsCount;
    }

    
    /**
     * @return int
     */
    public function getPublicationCount()
    {
        return $this->publicationCount;
    }

    
    /**
     * @return ShopifyCollectionPublicationConnection
     */
    public function getPublications()
    {
        return $this->publications;
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
     * @return ShopifyCollectionRuleSet
     */
    public function getRuleSet()
    {
        return $this->ruleSet;
    }

    
    /**
     * @return ShopifySEO
     */
    public function getSeo()
    {
        return $this->seo;
    }

    
    /**
     * @return ShopifyCollectionSortOrderEnumObject
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
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
     * @return ShopifyTranslation[]
     */
    public function getTranslations()
    {
        return $this->translations;
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
            if (isset($data['activeOperations']) && $data['activeOperations'] !== null) {
                $instance->activeOperations = ShopifyCollectionOperations::fromArray($data['activeOperations']);
            }
            if (isset($data['availablePublicationsCount']) && $data['availablePublicationsCount'] !== null) {
                $instance->availablePublicationsCount = ShopifyCount::fromArray($data['availablePublicationsCount']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['descriptionHtml']) && $data['descriptionHtml'] !== null) {
                $instance->descriptionHtml = $data['descriptionHtml'];
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
            }
            if (isset($data['feedback']) && $data['feedback'] !== null) {
                $instance->feedback = ShopifyResourceFeedback::fromArray($data['feedback']);
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['hasProduct']) && $data['hasProduct'] !== null) {
                $instance->hasProduct = $data['hasProduct'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = ShopifyImage::fromArray($data['image']);
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
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
            if (isset($data['products']) && $data['products'] !== null) {
                $instance->products = ShopifyProductConnection::fromArray($data['products']);
            }
            if (isset($data['productsCount']) && $data['productsCount'] !== null) {
                $instance->productsCount = ShopifyCount::fromArray($data['productsCount']);
            }
            if (isset($data['publicationCount']) && $data['publicationCount'] !== null) {
                $instance->publicationCount = $data['publicationCount'];
            }
            if (isset($data['publications']) && $data['publications'] !== null) {
                $instance->publications = ShopifyCollectionPublicationConnection::fromArray($data['publications']);
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
            if (isset($data['resourcePublications']) && $data['resourcePublications'] !== null) {
                $instance->resourcePublications = ShopifyResourcePublicationConnection::fromArray($data['resourcePublications']);
            }
            if (isset($data['resourcePublicationsCount']) && $data['resourcePublicationsCount'] !== null) {
                $instance->resourcePublicationsCount = ShopifyCount::fromArray($data['resourcePublicationsCount']);
            }
            if (isset($data['resourcePublicationsV2']) && $data['resourcePublicationsV2'] !== null) {
                $instance->resourcePublicationsV2 = ShopifyResourcePublicationV2Connection::fromArray($data['resourcePublicationsV2']);
            }
            if (isset($data['ruleSet']) && $data['ruleSet'] !== null) {
                $instance->ruleSet = ShopifyCollectionRuleSet::fromArray($data['ruleSet']);
            }
            if (isset($data['seo']) && $data['seo'] !== null) {
                $instance->seo = ShopifySEO::fromArray($data['seo']);
            }
            if (isset($data['sortOrder']) && $data['sortOrder'] !== null) {
                $instance->sortOrder = $data['sortOrder'];
            }
            if (isset($data['storefrontId']) && $data['storefrontId'] !== null) {
                $instance->storefrontId = $data['storefrontId'];
            }
            if (isset($data['templateSuffix']) && $data['templateSuffix'] !== null) {
                $instance->templateSuffix = $data['templateSuffix'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
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
            if ($this->activeOperations !== null) {
                $data['activeOperations'] = $this->activeOperations->asArray();
            }
            if ($this->availablePublicationsCount !== null) {
                $data['availablePublicationsCount'] = $this->availablePublicationsCount->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->descriptionHtml !== null) {
                $data['descriptionHtml'] = $this->descriptionHtml;
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->feedback !== null) {
                $data['feedback'] = $this->feedback->asArray();
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->hasProduct !== null) {
                $data['hasProduct'] = $this->hasProduct;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
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
            if ($this->products !== null) {
                $data['products'] = $this->products->asArray();
            }
            if ($this->productsCount !== null) {
                $data['productsCount'] = $this->productsCount->asArray();
            }
            if ($this->publicationCount !== null) {
                $data['publicationCount'] = $this->publicationCount;
            }
            if ($this->publications !== null) {
                $data['publications'] = $this->publications->asArray();
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
            if ($this->resourcePublications !== null) {
                $data['resourcePublications'] = $this->resourcePublications->asArray();
            }
            if ($this->resourcePublicationsCount !== null) {
                $data['resourcePublicationsCount'] = $this->resourcePublicationsCount->asArray();
            }
            if ($this->resourcePublicationsV2 !== null) {
                $data['resourcePublicationsV2'] = $this->resourcePublicationsV2->asArray();
            }
            if ($this->ruleSet !== null) {
                $data['ruleSet'] = $this->ruleSet->asArray();
            }
            if ($this->seo !== null) {
                $data['seo'] = $this->seo->asArray();
            }
            if ($this->sortOrder !== null) {
                $data['sortOrder'] = $this->sortOrder;
            }
            if ($this->storefrontId !== null) {
                $data['storefrontId'] = $this->storefrontId;
            }
            if ($this->templateSuffix !== null) {
                $data['templateSuffix'] = $this->templateSuffix;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
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
            return $data;
        }
}
