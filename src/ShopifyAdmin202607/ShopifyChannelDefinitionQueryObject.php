<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A specific selling surface within a [sales channel](https://shopify.dev/docs/apps/build/sales-channels) platform. A channel definition identifies where products can be sold. Definitions can represent entire platforms (like Facebook or TikTok) or specific sales channels within those platforms, such as Instagram Shops, Instagram Shopping, or TikTok Live.
 *
 * Each definition includes the parent [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel) name and subchannel name to indicate the selling surface hierarchy.
 */
class ShopifyChannelDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ChannelDefinition";

    /**
     * Name of the channel that this sub channel belongs to.
     *
     * @deprecated Use [`OrderAttributionDefinition.displayName`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttributionDefinition#field-OrderAttributionDefinition.fields.displayName) instead.
     */
    public function selectChannelName(): static
    {
        $this->selectField("channelName");

        return $this;
    }

    /**
     * Unique string used as a public identifier for the channel definition.
     *
     * @deprecated Use [`OrderAttributionDefinition.handle`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttributionDefinition#field-OrderAttributionDefinition.fields.handle) instead.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * The unique ID for the channel definition.
     *
     * @deprecated Use [`OrderAttributionDefinition.id`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttributionDefinition#field-OrderAttributionDefinition.fields.id) instead.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Whether this channel definition represents a marketplace.
     *
     * @deprecated Use [`OrderAttributionDefinition.handle`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttributionDefinition#field-OrderAttributionDefinition.fields.handle) instead.
     */
    public function selectIsMarketplace(): static
    {
        $this->selectField("isMarketplace");

        return $this;
    }

    /**
     * Name of the sub channel (e.g. Online Store, Instagram Shopping, TikTok Live).
     *
     * @deprecated Use [`OrderAttributionDefinition.displayName`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttributionDefinition#field-OrderAttributionDefinition.fields.displayName) instead.
     */
    public function selectSubChannelName(): static
    {
        $this->selectField("subChannelName");

        return $this;
    }

    /**
     * Icon displayed when showing the channel in admin.
     *
     * @deprecated Use [`OrderAttributionDefinition.icon`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttributionDefinition#field-OrderAttributionDefinition.fields.icon) instead.
     */
    public function selectSvgIcon(): static
    {
        $this->selectField("svgIcon");

        return $this;
    }
}
