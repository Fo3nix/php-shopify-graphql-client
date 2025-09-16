<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppleApplicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppleApplication";

    public function selectAppClipApplicationId()
    {
        $this->selectField("appClipApplicationId");

        return $this;
    }

    public function selectAppClipsEnabled()
    {
        $this->selectField("appClipsEnabled");

        return $this;
    }

    public function selectAppId()
    {
        $this->selectField("appId");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectSharedWebCredentialsEnabled()
    {
        $this->selectField("sharedWebCredentialsEnabled");

        return $this;
    }

    public function selectUniversalLinksEnabled()
    {
        $this->selectField("universalLinksEnabled");

        return $this;
    }
}
