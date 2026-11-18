<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for an Apple based mobile platform application.
 */
class ShopifyMobilePlatformApplicationUpdateAppleInputInputObject extends InputObject
{
    protected $appId;
    protected $universalLinksEnabled;
    protected $sharedWebCredentialsEnabled;
    protected $appClipsEnabled;
    protected $appClipApplicationId;

    /**
     * Apple application ID.
     */
    public function setAppId($appId): static
    {
        $this->appId = $appId;

        return $this;
    }

    /**
     * Whether Apple Universal Links are supported by this app.
     */
    public function setUniversalLinksEnabled($universalLinksEnabled): static
    {
        $this->universalLinksEnabled = $universalLinksEnabled;

        return $this;
    }

    /**
     * Whether Apple shared web credentials are enabled for this app.
     */
    public function setSharedWebCredentialsEnabled($sharedWebCredentialsEnabled): static
    {
        $this->sharedWebCredentialsEnabled = $sharedWebCredentialsEnabled;

        return $this;
    }

    /**
     * Whether Apple App Clips are enabled for this app.
     */
    public function setAppClipsEnabled($appClipsEnabled): static
    {
        $this->appClipsEnabled = $appClipsEnabled;

        return $this;
    }

    /**
     * The Apple App Clip application ID.
     */
    public function setAppClipApplicationId($appClipApplicationId): static
    {
        $this->appClipApplicationId = $appClipApplicationId;

        return $this;
    }
}
