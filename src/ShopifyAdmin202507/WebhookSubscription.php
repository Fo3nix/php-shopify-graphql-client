<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ApiVersion;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\WebhookSubscriptionEndpoint;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\WebhookSubscriptionMetafieldIdentifier;

class WebhookSubscription
{
    protected $apiVersion;
    protected $callbackUrl;
    protected $createdAt;
    protected $endpoint;
    protected $filter;
    protected $format;
    protected $id;
    protected $includeFields;
    protected $legacyResourceId;
    protected $metafieldNamespaces;
    protected $metafields;
    protected $topic;
    protected $updatedAt;

    
    /**
     * @return ApiVersion
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    
    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return WebhookSubscriptionEndpoint
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    
    /**
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    
    /**
     * @return WebhookSubscriptionFormatEnumObject
     */
    public function getFormat()
    {
        return $this->format;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string[]
     */
    public function getIncludeFields()
    {
        return $this->includeFields;
    }

    
    /**
     * @return string
     */
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
    }

    
    /**
     * @return string[]
     */
    public function getMetafieldNamespaces()
    {
        return $this->metafieldNamespaces;
    }

    
    /**
     * @return WebhookSubscriptionMetafieldIdentifier[]
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return WebhookSubscriptionTopicEnumObject
     */
    public function getTopic()
    {
        return $this->topic;
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
            if (isset($data['apiVersion']) && $data['apiVersion'] !== null) {
                $instance->apiVersion = ApiVersion::fromArray($data['apiVersion']);
            }
            if (isset($data['callbackUrl']) && $data['callbackUrl'] !== null) {
                $instance->callbackUrl = $data['callbackUrl'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['endpoint']) && $data['endpoint'] !== null) {
                $instance->endpoint = WebhookSubscriptionEndpoint::fromArray($data['endpoint']);
            }
            if (isset($data['filter']) && $data['filter'] !== null) {
                $instance->filter = $data['filter'];
            }
            if (isset($data['format']) && $data['format'] !== null) {
                $instance->format = $data['format'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['includeFields']) && $data['includeFields'] !== null) {
                $instance->includeFields = $data['includeFields'];
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['metafieldNamespaces']) && $data['metafieldNamespaces'] !== null) {
                $instance->metafieldNamespaces = $data['metafieldNamespaces'];
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = array_map(function($item) { return WebhookSubscriptionMetafieldIdentifier::fromArray($item); }, $data['metafields']);
            }
            if (isset($data['topic']) && $data['topic'] !== null) {
                $instance->topic = $data['topic'];
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
            if ($this->apiVersion !== null) {
                $data['apiVersion'] = $this->apiVersion->asArray();
            }
            if ($this->callbackUrl !== null) {
                $data['callbackUrl'] = $this->callbackUrl;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->endpoint !== null) {
                $data['endpoint'] = $this->endpoint->asArray();
            }
            if ($this->filter !== null) {
                $data['filter'] = $this->filter;
            }
            if ($this->format !== null) {
                $data['format'] = $this->format;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->includeFields !== null) {
                $data['includeFields'] = $this->includeFields;
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->metafieldNamespaces !== null) {
                $data['metafieldNamespaces'] = $this->metafieldNamespaces;
            }
            if ($this->metafields !== null) {
                $data['metafields'] = array_map(function($item) { return $item->asArray(); }, $this->metafields);
            }
            if ($this->topic !== null) {
                $data['topic'] = $this->topic;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
