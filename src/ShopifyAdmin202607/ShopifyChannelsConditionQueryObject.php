<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition checking the channel that the visitor is shopping from.
 */
class ShopifyChannelsConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ChannelsCondition";

    /**
     * The application level for the condition.
     */
    public function selectApplicationLevel(): static
    {
        $this->selectField("applicationLevel");

        return $this;
    }

    /**
     * The channels that comprise the market.
     */
    public function selectChannels(?ShopifyChannelsConditionChannelsArgumentsObject $argsObject = null): ShopifyChannelConnectionQueryObject
    {
        $object = new ShopifyChannelConnectionQueryObject("channels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of channels condition.
     */
    public function selectChannelsCount(?ShopifyChannelsConditionChannelsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("channelsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
