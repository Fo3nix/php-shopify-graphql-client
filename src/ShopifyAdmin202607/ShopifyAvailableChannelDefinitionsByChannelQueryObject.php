<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAvailableChannelDefinitionsByChannelQueryObject extends QueryObject
{
    const OBJECT_NAME = "AvailableChannelDefinitionsByChannel";

    /**
     * @deprecated Use [`QueryRoot.orderAttributionDefinitions`](https://shopify.dev/docs/api/admin-graphql/latest/queries/orderAttributionDefinitions) and select `id`, `handle`, `displayName`, and `icon` instead.
     */
    public function selectChannelDefinitions(ShopifyAvailableChannelDefinitionsByChannelChannelDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelDefinitionQueryObject("channelDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use [`OrderAttributionDefinition.displayName`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderAttributionDefinition#field-OrderAttributionDefinition.fields.displayName) instead.
     */
    public function selectChannelName()
    {
        $this->selectField("channelName");

        return $this;
    }
}
