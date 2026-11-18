<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents an object containing all information for channels available to a shop.
 */
class ShopifyAvailableChannelDefinitionsByChannelQueryObject extends QueryObject
{
    const OBJECT_NAME = "AvailableChannelDefinitionsByChannel";

    /**
     * The channel definitions for channels installed on a shop.
     *
     * @deprecated Use [`QueryRoot.orderAttributionDefinitions`](https://shopify.dev/docs/api/admin-graphql/latest/queries/orderAttributionDefinitions) and select `id`, `handle`, `displayName`, and `icon` instead.
     */
    public function selectChannelDefinitions(?ShopifyAvailableChannelDefinitionsByChannelChannelDefinitionsArgumentsObject $argsObject = null): ShopifyChannelDefinitionQueryObject
    {
        $object = new ShopifyChannelDefinitionQueryObject("channelDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the channel.
     *
     * @deprecated Use [`OrderAttributionDefinition.displayName`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttributionDefinition#field-OrderAttributionDefinition.fields.displayName) instead.
     */
    public function selectChannelName(): static
    {
        $this->selectField("channelName");

        return $this;
    }
}
