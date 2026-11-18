<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Identifies the [sales channel](https://shopify.dev/docs/apps/build/sales-channels) and [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) from which an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) originated. Provides attribution details such as the specific platform (Facebook Marketplace, Instagram Shopping) or marketplace where the order was placed.
 *
 * Links to the app that manages the channel and optional [`ChannelDefinition`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ChannelDefinition) details that specify the exact sub-channel or selling surface.
 */
class ShopifyChannelInformationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ChannelInformation";

    /**
     * The app associated with the channel.
     *
     * @deprecated Use [`Order.attribution`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order#field-Order.fields.attribution) for order attribution, or [`Order.app`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order#field-Order.fields.app) and [`Order.publication`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order#field-Order.fields.publication) for app and sales channel details.
     */
    public function selectApp(?ShopifyChannelInformationAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The channel definition associated with the channel.
     *
     * @deprecated Use [`QueryRoot.orderAttributionDefinitions`](https://shopify.dev/docs/api/admin-graphql/latest/queries/orderAttributionDefinitions) and select `id`, `handle`, `displayName`, and `icon` instead.
     */
    public function selectChannelDefinition(?ShopifyChannelInformationChannelDefinitionArgumentsObject $argsObject = null): ShopifyChannelDefinitionQueryObject
    {
        $object = new ShopifyChannelDefinitionQueryObject("channelDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unique ID for the channel.
     *
     * @deprecated Use [`Order.attribution.handle`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttribution#field-OrderAttribution.fields.handle) instead.
     */
    public function selectChannelId(): static
    {
        $this->selectField("channelId");

        return $this;
    }

    /**
     * The publishing destination display name or channel name.
     *
     * @deprecated Use [`Order.attribution.displayName`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttribution#field-OrderAttribution.fields.displayName) instead.
     */
    public function selectDisplayName(): static
    {
        $this->selectField("displayName");

        return $this;
    }

    /**
     * A globally-unique ID.
     *
     * @deprecated Use [`Order.attribution.handle`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttribution#field-OrderAttribution.fields.handle) instead.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }
}
