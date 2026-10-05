<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyChannelsConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ChannelsCondition";

    public function selectApplicationLevel()
    {
        $this->selectField("applicationLevel");

        return $this;
    }

    public function selectChannels(ShopifyChannelsConditionChannelsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelConnectionQueryObject("channels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChannelsCount(ShopifyChannelsConditionChannelsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("channelsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
