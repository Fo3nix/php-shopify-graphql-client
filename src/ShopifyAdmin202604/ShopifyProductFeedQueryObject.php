<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductFeedQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductFeed";

    public function selectChannelId()
    {
        $this->selectField("channelId");

        return $this;
    }

    public function selectCountry()
    {
        $this->selectField("country");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLanguage()
    {
        $this->selectField("language");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
