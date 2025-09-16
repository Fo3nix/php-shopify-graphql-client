<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ArticleAuthor;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Blog;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CommentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\EventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Image;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Metafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Translation;

class Article
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
     * @return ArticleAuthor
     */
    public function getAuthor()
    {
        return $this->author;
    }

    
    /**
     * @return Blog
     */
    public function getBlog()
    {
        return $this->blog;
    }

    
    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    
    /**
     * @return CommentConnection
     */
    public function getComments()
    {
        return $this->comments;
    }

    
    /**
     * @return Count
     */
    public function getCommentsCount()
    {
        return $this->commentsCount;
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
     * @return EventConnection
     */
    public function getEvents()
    {
        return $this->events;
    }

    
    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
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
     * @return bool
     */
    public function getIsPublished()
    {
        return $this->isPublished;
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
     * @return Carbon
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    
    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
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
     * @return Translation[]
     */
    public function getTranslations()
    {
        return $this->translations;
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
            if (isset($data['author']) && $data['author'] !== null) {
                $instance->author = ArticleAuthor::fromArray($data['author']);
            }
            if (isset($data['blog']) && $data['blog'] !== null) {
                $instance->blog = Blog::fromArray($data['blog']);
            }
            if (isset($data['body']) && $data['body'] !== null) {
                $instance->body = $data['body'];
            }
            if (isset($data['comments']) && $data['comments'] !== null) {
                $instance->comments = CommentConnection::fromArray($data['comments']);
            }
            if (isset($data['commentsCount']) && $data['commentsCount'] !== null) {
                $instance->commentsCount = Count::fromArray($data['commentsCount']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['defaultCursor']) && $data['defaultCursor'] !== null) {
                $instance->defaultCursor = $data['defaultCursor'];
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = EventConnection::fromArray($data['events']);
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = Image::fromArray($data['image']);
            }
            if (isset($data['isPublished']) && $data['isPublished'] !== null) {
                $instance->isPublished = $data['isPublished'];
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
                $instance->translations = array_map(function($item) { return Translation::fromArray($item); }, $data['translations']);
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
