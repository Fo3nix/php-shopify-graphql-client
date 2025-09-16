<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Article;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CommentAuthor;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\EventConnection;

class Comment
{
    protected $article;
    protected $author;
    protected $body;
    protected $bodyHtml;
    protected $createdAt;
    protected $events;
    protected $id;
    protected $ip;
    protected $isPublished;
    protected $publishedAt;
    protected $status;
    protected $updatedAt;
    protected $userAgent;

    
    /**
     * @return Article
     */
    public function getArticle()
    {
        return $this->article;
    }

    
    /**
     * @return CommentAuthor
     */
    public function getAuthor()
    {
        return $this->author;
    }

    
    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    
    /**
     * @return string
     */
    public function getBodyHtml()
    {
        return $this->bodyHtml;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    
    /**
     * @return bool
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    
    /**
     * @return Carbon
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    
    /**
     * @return CommentStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    
    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['article']) && $data['article'] !== null) {
                $instance->article = Article::fromArray($data['article']);
            }
            if (isset($data['author']) && $data['author'] !== null) {
                $instance->author = CommentAuthor::fromArray($data['author']);
            }
            if (isset($data['body']) && $data['body'] !== null) {
                $instance->body = $data['body'];
            }
            if (isset($data['bodyHtml']) && $data['bodyHtml'] !== null) {
                $instance->bodyHtml = $data['bodyHtml'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = EventConnection::fromArray($data['events']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['ip']) && $data['ip'] !== null) {
                $instance->ip = $data['ip'];
            }
            if (isset($data['isPublished']) && $data['isPublished'] !== null) {
                $instance->isPublished = $data['isPublished'];
            }
            if (isset($data['publishedAt']) && $data['publishedAt'] !== null) {
                $instance->publishedAt = new Carbon($data['publishedAt']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['userAgent']) && $data['userAgent'] !== null) {
                $instance->userAgent = $data['userAgent'];
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
            if ($this->article !== null) {
                $data['article'] = $this->article->asArray();
            }
            if ($this->author !== null) {
                $data['author'] = $this->author->asArray();
            }
            if ($this->body !== null) {
                $data['body'] = $this->body;
            }
            if ($this->bodyHtml !== null) {
                $data['bodyHtml'] = $this->bodyHtml;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->ip !== null) {
                $data['ip'] = $this->ip;
            }
            if ($this->isPublished !== null) {
                $data['isPublished'] = $this->isPublished;
            }
            if ($this->publishedAt !== null) {
                $data['publishedAt'] = $this->publishedAt->toIso8601String();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->userAgent !== null) {
                $data['userAgent'] = $this->userAgent;
            }
            return $data;
        }
}
