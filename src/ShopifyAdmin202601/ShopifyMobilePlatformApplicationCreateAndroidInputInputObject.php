<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for an Android based mobile platform application.
 */
class ShopifyMobilePlatformApplicationCreateAndroidInputInputObject extends InputObject
{
    const REQUIRED = ["sha256CertFingerprints", "appLinksEnabled"];

    protected $applicationId;
    protected $sha256CertFingerprints;
    protected $appLinksEnabled;

    /**
     * Android application ID.
     */
    public function setApplicationId($applicationId): static
    {
        $this->applicationId = $applicationId;

        return $this;
    }

    /**
     * The SHA256 fingerprints of the app’s signing certificate.
     */
    public function setSha256CertFingerprints(array $sha256CertFingerprints): static
    {
        $this->sha256CertFingerprints = $sha256CertFingerprints;

        return $this;
    }

    /**
     * Whether Android App Links are supported by this app.
     */
    public function setAppLinksEnabled($appLinksEnabled): static
    {
        $this->appLinksEnabled = $appLinksEnabled;

        return $this;
    }
}
