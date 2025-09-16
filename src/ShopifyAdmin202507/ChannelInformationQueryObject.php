<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ChannelInformationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ChannelInformation";

    public function selectApp(ChannelInformationAppArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChannelDefinition(ChannelInformationChannelDefinitionArgumentsObject $argsObject = null)
    {
        $object = new ChannelDefinitionQueryObject("channelDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChannelId()
    {
        $this->selectField("channelId");

        return $this;
    }

    public function selectDisplayName()
    {
        $this->selectField("displayName");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
