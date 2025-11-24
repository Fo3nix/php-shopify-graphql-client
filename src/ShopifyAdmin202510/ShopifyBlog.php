<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyArticleConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCount;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyBlogFeed;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyTranslation;

class ShopifyBlog
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
     * @return ShopifyArticleConnection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getArticlesCount()
    {
        return $this->articlesCount;
    }

    
    /**
     * @return ShopifyCommentPolicyEnumObject
     */
    public function getCommentPolicy()
    {
        return $this->commentPolicy;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return ShopifyEventConnection
     */
    public function getEvents()
    {
        return $this->events;
    }

    
    /**
     * @return ShopifyBlogFeed
     */
    public function getFeed()
    {
        return $this->feed;
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
     * @return ShopifyTranslation[]
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
