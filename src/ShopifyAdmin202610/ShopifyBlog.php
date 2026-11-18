<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyArticleConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCount;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyBlogFeed;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyTranslation;

/**
 * A blog for publishing articles in the online store. Stores can have multiple blogs to organize content by topic or purpose.
 *
 * Each blog contains articles with their associated comments, tags, and metadata. The comment policy controls whether readers can post comments and whether moderation is required. Blogs use customizable URL handles and can apply alternate templates for specialized layouts.
 */
class ShopifyBlog implements ShopifyHasEvents, ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyHasPublishedTranslations, ShopifyNode
{
    protected $articles;
    protected $articlesCount;
    protected $commentPolicy;
    protected $createdAt;
    protected $events;
    protected $feed;
    protected $handle;
    protected $id;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $tags;
    protected $templateSuffix;
    protected $title;
    protected $translations;
    protected $updatedAt;

    
    /**
     * List of the blog's articles.
     *
     * @return ShopifyArticleConnection
     */
    public function getArticles(): ?ShopifyArticleConnection
    {
        return $this->articles;
    }

    
    /**
     * Count of articles. Limited to a maximum of 10000 by default.
     *
     * @return ShopifyCount
     */
    public function getArticlesCount(): ?ShopifyCount
    {
        return $this->articlesCount;
    }

    
    /**
     * Indicates whether readers can post comments to the blog and if comments are moderated or not.
     *
     * @return string A ShopifyCommentPolicyEnumObject value
     */
    public function getCommentPolicy(): ?string
    {
        return $this->commentPolicy;
    }

    
    /**
     * The date and time when the blog was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
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
     * FeedBurner provider details. Any blogs that aren't already integrated with FeedBurner can't use the service.
     *
     * @return ShopifyBlogFeed
     */
    public function getFeed(): ?ShopifyBlogFeed
    {
        return $this->feed;
    }

    
    /**
     * A unique, human-friendly string for the blog. If no handle is specified, a handle will be generated automatically from the blog title.
     * The handle is customizable and is used by the Liquid templating language to refer to the blog.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
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
     * A list of tags associated with the 200 most recent blog articles.
     *
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    
    /**
     * The name of the template a blog is using if it's using an alternate template.
     * Returns `null` if a blog is using the default blog.liquid template.
     *
     * @return string
     */
    public function getTemplateSuffix(): ?string
    {
        return $this->templateSuffix;
    }

    
    /**
     * The title of the blog.
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
     * The date and time when the blog was update.
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
            if (isset($data['articles']) && $data['articles'] !== null) {
                $instance->articles = ShopifyArticleConnection::fromArray($data['articles']);
            }
            if (isset($data['articlesCount']) && $data['articlesCount'] !== null) {
                $instance->articlesCount = ShopifyCount::fromArray($data['articlesCount']);
            }
            if (isset($data['commentPolicy']) && $data['commentPolicy'] !== null) {
                $instance->commentPolicy = $data['commentPolicy'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
            }
            if (isset($data['feed']) && $data['feed'] !== null) {
                $instance->feed = ShopifyBlogFeed::fromArray($data['feed']);
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
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
            if (isset($data['tags']) && $data['tags'] !== null) {
                $instance->tags = $data['tags'];
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
            if ($this->articles !== null) {
                $data['articles'] = $this->articles->asArray();
            }
            if ($this->articlesCount !== null) {
                $data['articlesCount'] = $this->articlesCount->asArray();
            }
            if ($this->commentPolicy !== null) {
                $data['commentPolicy'] = $this->commentPolicy;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->feed !== null) {
                $data['feed'] = $this->feed->asArray();
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
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
            if ($this->tags !== null) {
                $data['tags'] = $this->tags;
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
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
