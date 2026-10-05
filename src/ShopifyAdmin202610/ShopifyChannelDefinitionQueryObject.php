<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyChannelDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ChannelDefinition";

    /**
     * @deprecated Use [`OrderAttributionDefinition.displayName`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttributionDefinition#field-OrderAttributionDefinition.fields.displayName) instead.
     */
    public function selectChannelName()
    {
        $this->selectField("channelName");

        return $this;
    }

    /**
     * @deprecated Use [`OrderAttributionDefinition.handle`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttributionDefinition#field-OrderAttributionDefinition.fields.handle) instead.
     */
    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * @deprecated Use [`OrderAttributionDefinition.id`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttributionDefinition#field-OrderAttributionDefinition.fields.id) instead.
     */
    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * @deprecated Use [`OrderAttributionDefinition.handle`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttributionDefinition#field-OrderAttributionDefinition.fields.handle) instead.
     */
    public function selectIsMarketplace()
    {
        $this->selectField("isMarketplace");

        return $this;
    }

    /**
     * @deprecated Use [`OrderAttributionDefinition.displayName`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttributionDefinition#field-OrderAttributionDefinition.fields.displayName) instead.
     */
    public function selectSubChannelName()
    {
        $this->selectField("subChannelName");

        return $this;
    }

    /**
     * @deprecated Use [`OrderAttributionDefinition.icon`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttributionDefinition#field-OrderAttributionDefinition.fields.icon) instead.
     */
    public function selectSvgIcon()
    {
        $this->selectField("svgIcon");

        return $this;
    }
}
