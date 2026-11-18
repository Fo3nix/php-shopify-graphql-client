<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyArticle;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCommentAuthor;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyEventConnection;

/**
 * A comment on an article.
 */
class ShopifyComment implements ShopifyHasEvents, ShopifyNode
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
     * The article associated with the comment.
     *
     * @return ShopifyArticle
     */
    public function getArticle(): ?ShopifyArticle
    {
        return $this->article;
    }

    
    /**
     * The comment’s author.
     *
     * @return ShopifyCommentAuthor
     */
    public function getAuthor(): ?ShopifyCommentAuthor
    {
        return $this->author;
    }

    
    /**
     * The content of the comment.
     *
     * @return string
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    
    /**
     * The content of the comment, complete with HTML formatting.
     *
     * @return string
     */
    public function getBodyHtml(): mixed
    {
        return $this->bodyHtml;
    }

    
    /**
     * The date and time when the comment was created.
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
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The IP address of the commenter.
     *
     * @return string
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    
    /**
     * Whether or not the comment is published.
     *
     * @return bool
     */
    public function getIsPublished(): ?bool
    {
        return $this->isPublished;
    }

    
    /**
     * The date and time when the comment was published.
     *
     * @return Carbon
     */
    public function getPublishedAt(): ?Carbon
    {
        return $this->publishedAt;
    }

    
    /**
     * The status of the comment.
     *
     * @return string A ShopifyCommentStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The date and time when the comment was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    
    /**
     * The user agent of the commenter.
     *
     * @return string
     */
    public function getUserAgent(): ?string
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
                $instance->article = ShopifyArticle::fromArray($data['article']);
            }
            if (isset($data['author']) && $data['author'] !== null) {
                $instance->author = ShopifyCommentAuthor::fromArray($data['author']);
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
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
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
