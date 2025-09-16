<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\EventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ResourceFeedback;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Image;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Metafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CollectionPublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ResourcePublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ResourcePublicationV2Connection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CollectionRuleSet;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SEO;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Translation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ChannelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PublicationConnection;
use Carbon\Carbon;

class Collection
{
    protected $availablePublicationsCount;
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
     * @return Count
     */
    public function getAvailablePublicationsCount()
    {
        return $this->availablePublicationsCount;
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
     * @return EventConnection
     */
    public function getEvents()
    {
        return $this->events;
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
     * @return Image
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
     * @return ProductConnection
     */
    public function getProducts()
    {
        return $this->products;
    }

    
    /**
     * @return Count
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
     * @return CollectionPublicationConnection
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
     * @return CollectionRuleSet
     */
    public function getRuleSet()
    {
        return $this->ruleSet;
    }

    
    /**
     * @return SEO
     */
    public function getSeo()
    {
        return $this->seo;
    }

    
    /**
     * @return CollectionSortOrderEnumObject
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
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['availablePublicationsCount']) && $data['availablePublicationsCount'] !== null) {
                $instance->availablePublicationsCount = Count::fromArray($data['availablePublicationsCount']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['descriptionHtml']) && $data['descriptionHtml'] !== null) {
                $instance->descriptionHtml = $data['descriptionHtml'];
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = EventConnection::fromArray($data['events']);
            }
            if (isset($data['feedback']) && $data['feedback'] !== null) {
                $instance->feedback = ResourceFeedback::fromArray($data['feedback']);
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
                $instance->image = Image::fromArray($data['image']);
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
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
            if (isset($data['products']) && $data['products'] !== null) {
                $instance->products = ProductConnection::fromArray($data['products']);
            }
            if (isset($data['productsCount']) && $data['productsCount'] !== null) {
                $instance->productsCount = Count::fromArray($data['productsCount']);
            }
            if (isset($data['publicationCount']) && $data['publicationCount'] !== null) {
                $instance->publicationCount = $data['publicationCount'];
            }
            if (isset($data['publications']) && $data['publications'] !== null) {
                $instance->publications = CollectionPublicationConnection::fromArray($data['publications']);
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
                $instance->resourcePublications = ResourcePublicationConnection::fromArray($data['resourcePublications']);
            }
            if (isset($data['resourcePublicationsCount']) && $data['resourcePublicationsCount'] !== null) {
                $instance->resourcePublicationsCount = Count::fromArray($data['resourcePublicationsCount']);
            }
            if (isset($data['resourcePublicationsV2']) && $data['resourcePublicationsV2'] !== null) {
                $instance->resourcePublicationsV2 = ResourcePublicationV2Connection::fromArray($data['resourcePublicationsV2']);
            }
            if (isset($data['ruleSet']) && $data['ruleSet'] !== null) {
                $instance->ruleSet = CollectionRuleSet::fromArray($data['ruleSet']);
            }
            if (isset($data['seo']) && $data['seo'] !== null) {
                $instance->seo = SEO::fromArray($data['seo']);
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
