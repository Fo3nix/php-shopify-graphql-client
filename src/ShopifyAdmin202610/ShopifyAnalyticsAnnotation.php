<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyApp;

/**
 * An annotation for a notable event on a shop's analytics timeline.
 */
class ShopifyAnalyticsAnnotation implements ShopifyNode
{
    protected $createdAt;
    protected $createdByApp;
    protected $description;
    protected $endedAt;
    protected $id;
    protected $source;
    protected $startedAt;
    protected $title;
    protected $type;
    protected $updatedAt;

    
    /**
     * The date and time when the annotation was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The app that created the annotation. Returns `null` if the annotation wasn't created by an app.
     *
     * @return ShopifyApp
     */
    public function getCreatedByApp(): ?ShopifyApp
    {
        return $this->createdByApp;
    }

    
    /**
     * A plain-text description that provides additional context about the annotation. The maximum length is 150 characters for app-created annotations.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The date and time when the annotation ended. Returns `null` if the annotation is open-ended.
     *
     * @return Carbon
     */
    public function getEndedAt(): ?Carbon
    {
        return $this->endedAt;
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
     * Identifies who or what created this annotation.
     *
     * @return string A ShopifyAnalyticsAnnotationSourceEnumObject value
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    
    /**
     * The date and time when the annotation started.
     *
     * @return Carbon
     */
    public function getStartedAt(): ?Carbon
    {
        return $this->startedAt;
    }

    
    /**
     * The title of the annotation. The maximum length is 75 characters for app-created annotations.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The type of event represented by the annotation. Refer to the list of [supported types](https://shopify.dev/docs/api/shopifyql/latest/syntax/annotate#annotation-categories-and-types).
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    
    /**
     * The date and time when the annotation was last updated.
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
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['createdByApp']) && $data['createdByApp'] !== null) {
                $instance->createdByApp = ShopifyApp::fromArray($data['createdByApp']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['endedAt']) && $data['endedAt'] !== null) {
                $instance->endedAt = new Carbon($data['endedAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['source']) && $data['source'] !== null) {
                $instance->source = $data['source'];
            }
            if (isset($data['startedAt']) && $data['startedAt'] !== null) {
                $instance->startedAt = new Carbon($data['startedAt']);
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->createdByApp !== null) {
                $data['createdByApp'] = $this->createdByApp->asArray();
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->endedAt !== null) {
                $data['endedAt'] = $this->endedAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->source !== null) {
                $data['source'] = $this->source;
            }
            if ($this->startedAt !== null) {
                $data['startedAt'] = $this->startedAt->toIso8601String();
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
