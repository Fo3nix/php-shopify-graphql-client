<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to create a web presence.
 */
class ShopifyWebPresenceCreateInputInputObject extends InputObject
{
    const REQUIRED = ["defaultLocale"];

    protected $domainId;
    protected $defaultLocale;
    protected $alternateLocales;
    protected $subfolderSuffix;

    /**
     * The web presence's domain ID. This field must be `null` if the `subfolderSuffix` isn't `null`.
     */
    public function setDomainId($domainId): static
    {
        $this->domainId = $domainId;

        return $this;
    }

    /**
     * The default locale for the web presence.
     */
    public function setDefaultLocale($defaultLocale): static
    {
        $this->defaultLocale = $defaultLocale;

        return $this;
    }

    /**
     * The alternate locales for the web presence.
     */
    public function setAlternateLocales(array $alternateLocales): static
    {
        $this->alternateLocales = $alternateLocales;

        return $this;
    }

    /**
     * The market-specific suffix of the subfolders defined by the web presence.
     * For example: in `/en-us`, the subfolder suffix is `us`.
     * Only ASCII characters are allowed. This field must be `null` if the `domainId` isn't `null`.
     */
    public function setSubfolderSuffix($subfolderSuffix): static
    {
        $this->subfolderSuffix = $subfolderSuffix;

        return $this;
    }
}
