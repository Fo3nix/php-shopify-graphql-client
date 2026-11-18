<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The Android mobile platform application.
 */
class ShopifyAndroidApplicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "AndroidApplication";

    /**
     * Whether Android App Links are supported by this app.
     */
    public function selectAppLinksEnabled(): static
    {
        $this->selectField("appLinksEnabled");

        return $this;
    }

    /**
     * The Android application ID.
     */
    public function selectApplicationId(): static
    {
        $this->selectField("applicationId");

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
     * The SHA256 fingerprints of the app's signing certificate.
     */
    public function selectSha256CertFingerprints(): static
    {
        $this->selectField("sha256CertFingerprints");

        return $this;
    }
}
