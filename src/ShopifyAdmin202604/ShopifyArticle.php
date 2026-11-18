<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyArticleAuthor;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyBlog;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCommentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCount;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyTranslation;

/**
 * An article that contains content, author information, and metadata. Articles belong to a [`Blog`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Blog) and can include HTML-formatted body text, summary text, and an associated image. Merchants publish articles to share content, drive traffic, and engage customers.
 *
 * Articles can be organized with tags and published immediately or scheduled for future publication using the [`publishedAt`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Article#field-Article.fields.publishedAt) timestamp. The API manages comments on articles when the blog's comment policy enables them.
 */
class ShopifyArticle implements ShopifyHasEvents, ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyHasPublishedTranslations, ShopifyNavigable, ShopifyNode
{
    protected $author;
    protected $blog;
    protected $body;
    protected $comments;
    protected $commentsCount;
    protected $createdAt;
    protected $defaultCursor;
    protected $events;
    protected $handle;
    protected $id;
    protected $image;
    protected $isPublished;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $publishedAt;
    protected $summary;
    protected $tags;
    protected $templateSuffix;
    protected $title;
    protected $translations;
    protected $updatedAt;

    
    /**
     * The name of the author of the article.
     *
     * @return ShopifyArticleAuthor
     */
    public function getAuthor(): ?ShopifyArticleAuthor
    {
        return $this->author;
    }

    
    /**
     * The blog containing the article.
     *
     * @return ShopifyBlog
     */
    public function getBlog(): ?ShopifyBlog
    {
        return $this->blog;
    }

    
    /**
     * The text of the article's body, complete with HTML markup.
     *
     * @return string
     */
    public function getBody(): mixed
    {
        return $this->body;
    }

    
    /**
     * List of the article's comments.
     *
     * @return ShopifyCommentConnection
     */
    public function getComments(): ?ShopifyCommentConnection
    {
        return $this->comments;
    }

    
    /**
     * Count of comments. Limited to a maximum of 10000 by default.
     *
     * @return ShopifyCount
     */
    public function getCommentsCount(): ?ShopifyCount
    {
        return $this->commentsCount;
    }

    
    /**
     * The date and time (ISO 8601 format) when the article was created.
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
     * The paginated list of events associated with the host subject.
     *
     * @return ShopifyEventConnection
     */
    public function getEvents(): ?ShopifyEventConnection
    {
        return $this->events;
    }

    
    /**
     * A unique, human-friendly string for the article that's automatically generated from the article's title.
     * The handle is used in the article's URL.
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
     * The image associated with the article.
     *
     * @return ShopifyImage
     */
    public function getImage(): ?ShopifyImage
    {
        return $this->image;
    }

    
    /**
     * Whether or not the article is visible.
     *
     * @return bool
     */
    public function getIsPublished(): ?bool
    {
        return $this->isPublished;
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
     * The date and time (ISO 8601 format) when the article became or will become visible.
     * Returns null when the article isn't visible.
     *
     * @return Carbon
     */
    public function getPublishedAt(): ?Carbon
    {
        return $this->publishedAt;
    }

    
    /**
     * A summary of the article, which can include HTML markup.
     * The summary is used by the online store theme to display the article on other pages, such as the home page or the main blog page.
     *
     * @return string
     */
    public function getSummary(): mixed
    {
        return $this->summary;
    }

    
    /**
     * A comma-separated list of tags.
     * Tags are additional short descriptors formatted as a string of comma-separated values.
     *
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    
    /**
     * The name of the template an article is using if it's using an alternate template.
     * If an article is using the default `article.liquid` template, then the value returned is `null`.
     *
     * @return string
     */
    public function getTemplateSuffix(): ?string
    {
        return $this->templateSuffix;
    }

    
    /**
     * The title of the article.
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
     * The date and time (ISO 8601 format) when the article was last updated.
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
            if (isset($data['author']) && $data['author'] !== null) {
                $instance->author = ShopifyArticleAuthor::fromArray($data['author']);
            }
            if (isset($data['blog']) && $data['blog'] !== null) {
                $instance->blog = ShopifyBlog::fromArray($data['blog']);
            }
            if (isset($data['body']) && $data['body'] !== null) {
                $instance->body = $data['body'];
            }
            if (isset($data['comments']) && $data['comments'] !== null) {
                $instance->comments = ShopifyCommentConnection::fromArray($data['comments']);
            }
            if (isset($data['commentsCount']) && $data['commentsCount'] !== null) {
                $instance->commentsCount = ShopifyCount::fromArray($data['commentsCount']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['defaultCursor']) && $data['defaultCursor'] !== null) {
                $instance->defaultCursor = $data['defaultCursor'];
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = ShopifyImage::fromArray($data['image']);
            }
            if (isset($data['isPublished']) && $data['isPublished'] !== null) {
                $instance->isPublished = $data['isPublished'];
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
            if (isset($data['publishedAt']) && $data['publishedAt'] !== null) {
                $instance->publishedAt = new Carbon($data['publishedAt']);
            }
            if (isset($data['summary']) && $data['summary'] !== null) {
                $instance->summary = $data['summary'];
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
            if ($this->author !== null) {
                $data['author'] = $this->author->asArray();
            }
            if ($this->blog !== null) {
                $data['blog'] = $this->blog->asArray();
            }
            if ($this->body !== null) {
                $data['body'] = $this->body;
            }
            if ($this->comments !== null) {
                $data['comments'] = $this->comments->asArray();
            }
            if ($this->commentsCount !== null) {
                $data['commentsCount'] = $this->commentsCount->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->defaultCursor !== null) {
                $data['defaultCursor'] = $this->defaultCursor;
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            if ($this->isPublished !== null) {
                $data['isPublished'] = $this->isPublished;
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
            if ($this->publishedAt !== null) {
                $data['publishedAt'] = $this->publishedAt->toIso8601String();
            }
            if ($this->summary !== null) {
                $data['summary'] = $this->summary;
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
