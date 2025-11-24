<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyChannelInformationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ChannelInformation";

    public function selectApp(ShopifyChannelInformationAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChannelDefinition(ShopifyChannelInformationChannelDefinitionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelDefinitionQueryObject("channelDefinition");
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
