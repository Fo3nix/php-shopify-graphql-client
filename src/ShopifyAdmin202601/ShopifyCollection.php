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

/**
 * The `Collection` object represents a group of [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product)
 * that merchants can organize to make their stores easier to browse and help customers find related products.
 * Collections serve as the primary way to categorize and display products across
 * [online stores](https://shopify.dev/docs/apps/build/online-store),
 * [sales channels](https://shopify.dev/docs/apps/build/sales-channels), and marketing campaigns.
 *
 * The `Collection` object provides information to:
 *
 * - Organize products by category, season, or promotion.
 * - Automate product grouping using rules (for example, by tag, type, or price).
 * - Configure product sorting and display order (for example, alphabetical, best-selling, price, or manual).
 * - Manage collection visibility and publication across sales channels.
 * - Add rich descriptions, images, and metadata to enhance discovery.
 *
 * > Note:
 * > Collections are unpublished by default. To make them available to customers,
 * use the [`publishablePublish`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/publishablePublish)
 * mutation after creation.
 *
 * Collections can be displayed in a store with Shopify's theme system through [Liquid templates](https://shopify.dev/docs/storefronts/themes/architecture/templates/collection)
 * and can be customized with [template suffixes](https://shopify.dev/docs/storefronts/themes/architecture/templates/alternate-templates)
 * for unique layouts. They also support advanced features like translated content, resource feedback,
 * and contextual publication for location-based catalogs.
 *
 * Learn about [using metafields with collection conditions](https://shopify.dev/docs/apps/build/custom-data/metafields/use-metafield-capabilities).
 */
class ShopifyCollection implements ShopifyHasEvents, ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyHasPublishedTranslations, ShopifyNode, ShopifyPublishable
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
     * Collection duplicate operations involving this collection, either as a source (copying products from this collection to another) or a target (copying products to this collection from another).
     *
     * @return ShopifyCollectionOperations
     */
    public function getActiveOperations(): ?ShopifyCollectionOperations
    {
        return $this->activeOperations;
    }

    
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
     * The date and time when the collection was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * A single-line, text-only description of the collection, stripped of any HTML tags and formatting that were included in the description.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The description of the collection, including any HTML tags and formatting. This content is typically displayed to customers, such as on an online store, depending on the theme.
     *
     * @return string
     */
    public function getDescriptionHtml(): mixed
    {
        return $this->descriptionHtml;
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
     * Information about the collection that's provided through resource feedback.
     *
     * @return ShopifyResourceFeedback
     */
    public function getFeedback(): ?ShopifyResourceFeedback
    {
        return $this->feedback;
    }

    
    /**
     * A unique string that identifies the collection. If a handle isn't specified when a collection is created, it's automatically generated from the collection's original title, and typically includes words from the title separated by hyphens. For example, a collection that was created with the title `Summer Catalog 2022` might have the handle `summer-catalog-2022`.
     *
     * If the title is changed, the handle doesn't automatically change.
     *
     * The handle can be used in themes by the Liquid templating language to refer to the collection, but using the ID is preferred because it never changes.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    
    /**
     * Whether the collection includes the specified product.
     *
     * @return bool
     */
    public function getHasProduct(): ?bool
    {
        return $this->hasProduct;
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
     * The image associated with the collection.
     *
     * @return ShopifyImage
     */
    public function getImage(): ?ShopifyImage
    {
        return $this->image;
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
     * The products that are included in the collection.
     *
     * @return ShopifyProductConnection
     */
    public function getProducts(): ?ShopifyProductConnection
    {
        return $this->products;
    }

    
    /**
     * The number of products in the collection.
     *
     * @return ShopifyCount
     */
    public function getProductsCount(): ?ShopifyCount
    {
        return $this->productsCount;
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
     * The channels where the collection is published.
     *
     * @return ShopifyCollectionPublicationConnection
     */
    public function getPublications(): ?ShopifyCollectionPublicationConnection
    {
        return $this->publications;
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
     * Specifies the rules that determine whether a product is included.
     *
     * @return ShopifyCollectionRuleSet
     */
    public function getRuleSet(): ?ShopifyCollectionRuleSet
    {
        return $this->ruleSet;
    }

    
    /**
     * If the default SEO fields for page title and description have been modified, contains the modified information.
     *
     * @return ShopifySEO
     */
    public function getSeo(): ?ShopifySEO
    {
        return $this->seo;
    }

    
    /**
     * The order in which the products in the collection are displayed by default in the Shopify admin and in sales channels, such as an online store.
     *
     * @return string A ShopifyCollectionSortOrderEnumObject value
     */
    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }

    
    /**
     * The Storefront GraphQL API ID of the `Collection`.
     *
     * As of the `2022-04` version release, the Storefront GraphQL API will no longer return Base64 encoded IDs to match the behavior of the Admin GraphQL API. Therefore, you can safely use the `id` field's value instead.
     *
     * @return string
     */
    public function getStorefrontId(): mixed
    {
        return $this->storefrontId;
    }

    
    /**
     * The suffix of the Liquid template being used to show the collection in an online store. For example, if the value is `custom`, then the collection is using the `collection.custom.liquid` template. If the value is `null`, then the collection is using the default `collection.liquid` template.
     *
     * @return string
     */
    public function getTemplateSuffix(): ?string
    {
        return $this->templateSuffix;
    }

    
    /**
     * The name of the collection. It's displayed in the Shopify admin and is typically displayed in sales channels, such as an online store.
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
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the collection was last modified.
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
