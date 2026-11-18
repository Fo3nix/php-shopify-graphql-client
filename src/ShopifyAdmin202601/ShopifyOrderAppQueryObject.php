<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Identifies the [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) that created an order. Common sources include "online store" for web purchases, "Point of Sale" for in-person sales, or custom app names for orders created through third-party integrations.
 *
 * Use this information to track order attribution, analyze sales channels, and route orders to appropriate fulfillment workflows based on their source.
 */
class ShopifyOrderAppQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderApp";

    /**
     * The application icon.
     */
    public function selectIcon(?ShopifyOrderAppIconArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("icon");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The application ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The name of the application.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
