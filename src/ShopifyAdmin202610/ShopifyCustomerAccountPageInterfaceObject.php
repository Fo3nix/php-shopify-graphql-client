<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A customer account page.
 */
class ShopifyCustomerAccountPageInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "CustomerAccountPage";

    /**
     * A default [cursor](https://shopify.dev/api/usage/pagination-graphql) that returns the single next record, sorted ascending by ID.
     */
    public function selectDefaultCursor(): static
    {
        $this->selectField("defaultCursor");

        return $this;
    }

    /**
     * A unique, human-friendly string for the customer account page.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * The unique ID for the customer account page.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The title of the customer account page.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    public function onCustomerAccountAppExtensionPage(): ShopifyCustomerAccountAppExtensionPageQueryObject
    {
        $object = new ShopifyCustomerAccountAppExtensionPageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerAccountNativePage(): ShopifyCustomerAccountNativePageQueryObject
    {
        $object = new ShopifyCustomerAccountNativePageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
