<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyChannelInformationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ChannelInformation";

    /**
     * @deprecated Use [`Order.attribution`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order#field-Order.fields.attribution) for order attribution, or [`Order.app`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order#field-Order.fields.app) and [`Order.publication`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order#field-Order.fields.publication) for app and sales channel details.
     */
    public function selectApp(ShopifyChannelInformationAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use [`QueryRoot.orderAttributionDefinitions`](https://shopify.dev/docs/api/admin-graphql/latest/queries/orderAttributionDefinitions) and select `id`, `handle`, `displayName`, and `icon` instead.
     */
    public function selectChannelDefinition(ShopifyChannelInformationChannelDefinitionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelDefinitionQueryObject("channelDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use [`Order.attribution.handle`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttribution#field-OrderAttribution.fields.handle) instead.
     */
    public function selectChannelId()
    {
        $this->selectField("channelId");

        return $this;
    }

    /**
     * @deprecated Use [`Order.attribution.displayName`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttribution#field-OrderAttribution.fields.displayName) instead.
     */
    public function selectDisplayName()
    {
        $this->selectField("displayName");

        return $this;
    }

    /**
     * @deprecated Use [`Order.attribution.handle`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttribution#field-OrderAttribution.fields.handle) instead.
     */
    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
