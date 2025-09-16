<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ChannelDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ChannelDefinition";

    public function selectChannelName()
    {
        $this->selectField("channelName");

        return $this;
    }

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectIsMarketplace()
    {
        $this->selectField("isMarketplace");

        return $this;
    }

    public function selectSubChannelName()
    {
        $this->selectField("subChannelName");

        return $this;
    }

    /**
     * @deprecated Use App.icon instead
     */
    public function selectSvgIcon()
    {
        $this->selectField("svgIcon");

        return $this;
    }
}
