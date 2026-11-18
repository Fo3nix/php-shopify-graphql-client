<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The Apple mobile platform application.
 */
class ShopifyAppleApplicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppleApplication";

    /**
     * The iOS App Clip application ID.
     */
    public function selectAppClipApplicationId(): static
    {
        $this->selectField("appClipApplicationId");

        return $this;
    }

    /**
     * Whether iOS App Clips are enabled for this app.
     */
    public function selectAppClipsEnabled(): static
    {
        $this->selectField("appClipsEnabled");

        return $this;
    }

    /**
     * The iOS App ID.
     */
    public function selectAppId(): static
    {
        $this->selectField("appId");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Whether iOS shared web credentials are enabled for this app.
     */
    public function selectSharedWebCredentialsEnabled(): static
    {
        $this->selectField("sharedWebCredentialsEnabled");

        return $this;
    }

    /**
     * Whether iOS Universal Links are supported by this app.
     */
    public function selectUniversalLinksEnabled(): static
    {
        $this->selectField("universalLinksEnabled");

        return $this;
    }
}
