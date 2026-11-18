<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to update a web presence for a market.
 */
class ShopifyMarketWebPresenceUpdateInputInputObject extends InputObject
{
    protected $domainId;
    protected $defaultLocale;
    protected $alternateLocales;
    protected $subfolderSuffix;

    /**
     * The web presence's domain ID. This field must be null if `subfolderSuffix` is not null.
     */
    public function setDomainId($domainId): static
    {
        $this->domainId = $domainId;

        return $this;
    }

    /**
     * The default locale for the market’s web presence.
     */
    public function setDefaultLocale($defaultLocale): static
    {
        $this->defaultLocale = $defaultLocale;

        return $this;
    }

    /**
     * The alternate locales for the market’s web presence.
     */
    public function setAlternateLocales(array $alternateLocales): static
    {
        $this->alternateLocales = $alternateLocales;

        return $this;
    }

    /**
     * The market-specific suffix of the subfolders defined by the web presence.
     * Example: in `/en-us` the subfolder suffix is `us`.
     * Only ASCII characters are allowed. This field must be null if `domainId` is not null.
     */
    public function setSubfolderSuffix($subfolderSuffix): static
    {
        $this->subfolderSuffix = $subfolderSuffix;

        return $this;
    }
}
