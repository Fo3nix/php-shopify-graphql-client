<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyApiVersion;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyWebhookSubscriptionEndpointHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyWebhookSubscriptionMetafieldIdentifier;

/**
 * A webhook subscription is a persisted data object created by an app using the REST Admin API or GraphQL Admin API.
 * It describes the topic that the app wants to receive, and a destination where Shopify should send webhooks of the specified topic.
 * When an event for a given topic occurs, the webhook subscription sends a relevant payload to the destination.
 * Learn more about the [webhooks system](https://shopify.dev/apps/webhooks).
 */
class ShopifyWebhookSubscription implements ShopifyLegacyInteroperability, ShopifyNode
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
    protected $name;
    protected $topic;
    protected $updatedAt;
    protected $uri;

    
    /**
     * The Admin API version that Shopify uses to serialize webhook events. This value is inherited from the app that created the webhook subscription.
     *
     * @return ShopifyApiVersion
     */
    public function getApiVersion(): ?ShopifyApiVersion
    {
        return $this->apiVersion;
    }

    
    /**
     * The destination URI to which the webhook subscription will send a message when an event occurs.
     *
     * @return string
     */
    public function getCallbackUrl(): mixed
    {
        return $this->callbackUrl;
    }

    
    /**
     * The date and time when the webhook subscription was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The endpoint to which the webhook subscription will send events.
     *
     * @return ShopifyWebhookEventBridgeEndpoint|ShopifyWebhookHttpEndpoint|ShopifyWebhookPubSubEndpoint
     */
    public function getEndpoint(): ShopifyWebhookEventBridgeEndpoint|ShopifyWebhookHttpEndpoint|ShopifyWebhookPubSubEndpoint|null
    {
        return $this->endpoint;
    }

    
    /**
     * A constraint specified using search syntax that ensures only webhooks that match the specified filter are emitted. See our [guide on filters](https://shopify.dev/docs/apps/build/webhooks/customize/filters) for more details.
     *
     * @return string
     */
    public function getFilter(): ?string
    {
        return $this->filter;
    }

    
    /**
     * The format in which the webhook subscription should send the data.
     *
     * @return string A ShopifyWebhookSubscriptionFormatEnumObject value
     */
    public function getFormat(): ?string
    {
        return $this->format;
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
     * The list of fields to be included in the webhook subscription. Only the fields specified will be included in the webhook payload. If null, then all fields will be included. Learn more about [modifying webhook payloads](https://shopify.dev/docs/apps/build/webhooks/customize/modify-payloads).
     *
     * @return string[]
     */
    public function getIncludeFields(): ?array
    {
        return $this->includeFields;
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
     * The list of namespaces for any metafields that should be included in the webhook subscription.
     *
     * @return string[]
     */
    public function getMetafieldNamespaces(): ?array
    {
        return $this->metafieldNamespaces;
    }

    
    /**
     * The list of identifiers specifying metafields to include in the webhook subscription.
     *
     * @return ShopifyWebhookSubscriptionMetafieldIdentifier[]
     */
    public function getMetafields(): ?array
    {
        return $this->metafields;
    }

    
    /**
     * A human-readable name for the webhook subscription.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The type of event that triggers the webhook. The topic determines when the webhook subscription sends a webhook, as well as what class of data object that webhook contains.
     *
     * @return string A ShopifyWebhookSubscriptionTopicEnumObject value
     */
    public function getTopic(): ?string
    {
        return $this->topic;
    }

    
    /**
     * The date and time when the webhook subscription was updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    
    /**
     * The URI to which the webhook subscription will send events.
     *
     * @return string
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['apiVersion']) && $data['apiVersion'] !== null) {
                $instance->apiVersion = ShopifyApiVersion::fromArray($data['apiVersion']);
            }
            if (isset($data['callbackUrl']) && $data['callbackUrl'] !== null) {
                $instance->callbackUrl = $data['callbackUrl'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['endpoint']) && $data['endpoint'] !== null) {
                $instance->endpoint = ShopifyWebhookSubscriptionEndpointHydrator::fromArray($data['endpoint']);
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
                $instance->metafields = array_map(function($item) { return ShopifyWebhookSubscriptionMetafieldIdentifier::fromArray($item); }, $data['metafields']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['topic']) && $data['topic'] !== null) {
                $instance->topic = $data['topic'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['uri']) && $data['uri'] !== null) {
                $instance->uri = $data['uri'];
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
                $data['endpoint'] = ShopifyWebhookSubscriptionEndpointHydrator::toArray($this->endpoint);
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
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->topic !== null) {
                $data['topic'] = $this->topic;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->uri !== null) {
                $data['uri'] = $this->uri;
            }
            return $data;
        }
}
