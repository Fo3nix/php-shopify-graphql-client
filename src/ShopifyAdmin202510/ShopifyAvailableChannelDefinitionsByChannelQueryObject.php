<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAvailableChannelDefinitionsByChannelQueryObject extends QueryObject
{
    const OBJECT_NAME = "AvailableChannelDefinitionsByChannel";

    public function selectChannelDefinitions(ShopifyAvailableChannelDefinitionsByChannelChannelDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelDefinitionQueryObject("channelDefinitions");
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
