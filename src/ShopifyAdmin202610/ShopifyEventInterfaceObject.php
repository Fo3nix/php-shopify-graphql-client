<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Events chronicle resource activities such as the creation of an article, the fulfillment of an order, or the
 * addition of a product.
 */
class ShopifyEventInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "Event";

    /**
     * The action that occurred.
     */
    public function selectAction(): static
    {
        $this->selectField("action");

        return $this;
    }

    /**
     * The name of the app that created the event.
     */
    public function selectAppTitle(): static
    {
        $this->selectField("appTitle");

        return $this;
    }

    /**
     * Whether the event was created by an app.
     */
    public function selectAttributeToApp(): static
    {
        $this->selectField("attributeToApp");

        return $this;
    }

    /**
     * Whether the event was caused by an admin user.
     */
    public function selectAttributeToUser(): static
    {
        $this->selectField("attributeToUser");

        return $this;
    }

    /**
     * The date and time when the event was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * Whether the event is critical.
     */
    public function selectCriticalAlert(): static
    {
        $this->selectField("criticalAlert");

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
     * Human readable text that describes the event.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }

    public function onBasicEvent(): ShopifyBasicEventQueryObject
    {
        $object = new ShopifyBasicEventQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCommentEvent(): ShopifyCommentEventQueryObject
    {
        $object = new ShopifyCommentEventQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
