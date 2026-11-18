<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A webhook subscription is a persisted data object created by an app using the REST Admin API or GraphQL Admin API.
 * It describes the topic that the app wants to receive, and a destination where Shopify should send webhooks of the specified topic.
 * When an event for a given topic occurs, the webhook subscription sends a relevant payload to the destination.
 * Learn more about the [webhooks system](https://shopify.dev/apps/webhooks).
 */
class ShopifyWebhookSubscriptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookSubscription";

    /**
     * The Admin API version that Shopify uses to serialize webhook events. This value is inherited from the app that created the webhook subscription.
     */
    public function selectApiVersion(?ShopifyWebhookSubscriptionApiVersionArgumentsObject $argsObject = null): ShopifyApiVersionQueryObject
    {
        $object = new ShopifyApiVersionQueryObject("apiVersion");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The destination URI to which the webhook subscription will send a message when an event occurs.
     *
     * @deprecated Use `uri` instead.
     */
    public function selectCallbackUrl(): static
    {
        $this->selectField("callbackUrl");

        return $this;
    }

    /**
     * The date and time when the webhook subscription was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The endpoint to which the webhook subscription will send events.
     *
     * @deprecated Use `uri` instead.
     */
    public function selectEndpoint(?ShopifyWebhookSubscriptionEndpointArgumentsObject $argsObject = null): ShopifyWebhookSubscriptionEndpointUnionObject
    {
        $object = new ShopifyWebhookSubscriptionEndpointUnionObject("endpoint");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A constraint specified using search syntax that ensures only webhooks that match the specified filter are emitted. See our [guide on filters](https://shopify.dev/docs/apps/build/webhooks/customize/filters) for more details.
     */
    public function selectFilter(): static
    {
        $this->selectField("filter");

        return $this;
    }

    /**
     * The format in which the webhook subscription should send the data.
     */
    public function selectFormat(): static
    {
        $this->selectField("format");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The list of fields to be included in the webhook subscription. Only the fields specified will be included in the webhook payload. If null, then all fields will be included. Learn more about [modifying webhook payloads](https://shopify.dev/docs/apps/build/webhooks/customize/modify-payloads).
     */
    public function selectIncludeFields(): static
    {
        $this->selectField("includeFields");

        return $this;
    }

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    /**
     * The list of namespaces for any metafields that should be included in the webhook subscription.
     */
    public function selectMetafieldNamespaces(): static
    {
        $this->selectField("metafieldNamespaces");

        return $this;
    }

    /**
     * The list of identifiers specifying metafields to include in the webhook subscription.
     */
    public function selectMetafields(?ShopifyWebhookSubscriptionMetafieldsArgumentsObject $argsObject = null): ShopifyWebhookSubscriptionMetafieldIdentifierQueryObject
    {
        $object = new ShopifyWebhookSubscriptionMetafieldIdentifierQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A human-readable name for the webhook subscription.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The type of event that triggers the webhook. The topic determines when the webhook subscription sends a webhook, as well as what class of data object that webhook contains.
     */
    public function selectTopic(): static
    {
        $this->selectField("topic");

        return $this;
    }

    /**
     * The date and time when the webhook subscription was updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * The URI to which the webhook subscription will send events.
     */
    public function selectUri(): static
    {
        $this->selectField("uri");

        return $this;
    }
}
