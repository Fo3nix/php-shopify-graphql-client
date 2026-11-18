<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a PubSub webhook subscription.
 */
class ShopifyPubSubWebhookSubscriptionInputInputObject extends InputObject
{
    const REQUIRED = ["pubSubProject", "pubSubTopic"];

    protected $format;
    protected $includeFields;
    protected $filter;
    protected $metafieldNamespaces;
    protected $metafields;
    protected $pubSubProject;
    protected $pubSubTopic;

    /**
     * The format in which the webhook subscription should send the data.
     */
    public function setFormat($shopifyWebhookSubscriptionFormat): static
    {
        $this->format = new RawObject($shopifyWebhookSubscriptionFormat);

        return $this;
    }

    /**
     * The list of fields to be included in the webhook subscription. Only the fields specified will be included in the webhook payload. If null, then all fields will be included. Learn more about [modifying webhook payloads](https://shopify.dev/docs/apps/build/webhooks/customize/modify_payloads).
     */
    public function setIncludeFields(array $includeFields): static
    {
        $this->includeFields = $includeFields;

        return $this;
    }

    /**
     * A constraint specified using search syntax that ensures only webhooks that match the specified filter are emitted. See our [guide on filters](https://shopify.dev/docs/apps/build/webhooks/customize/filters) for more details.
     */
    public function setFilter($filter): static
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * The list of namespaces for any metafields that should be included in the webhook subscription.
     */
    public function setMetafieldNamespaces(array $metafieldNamespaces): static
    {
        $this->metafieldNamespaces = $metafieldNamespaces;

        return $this;
    }

    /**
     * A list of identifiers specifying metafields to include in the webhook payload.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }

    /**
     * The Pub/Sub project ID.
     */
    public function setPubSubProject($pubSubProject): static
    {
        $this->pubSubProject = $pubSubProject;

        return $this;
    }

    /**
     * The Pub/Sub topic ID.
     */
    public function setPubSubTopic($pubSubTopic): static
    {
        $this->pubSubTopic = $pubSubTopic;

        return $this;
    }
}
