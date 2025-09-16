<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AvailableChannelDefinitionsByChannelQueryObject extends QueryObject
{
    const OBJECT_NAME = "AvailableChannelDefinitionsByChannel";

    public function selectChannelDefinitions(AvailableChannelDefinitionsByChannelChannelDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ChannelDefinitionQueryObject("channelDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChannelName()
    {
        $this->selectField("channelName");

        return $this;
    }
}
