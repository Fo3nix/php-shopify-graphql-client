<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to update a web presence.
 */
class ShopifyWebPresenceUpdateInputInputObject extends InputObject
{
    protected $defaultLocale;
    protected $alternateLocales;
    protected $subfolderSuffix;

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
     * Example: in `/en-us` the subfolder suffix is `us`.
     * Only ASCII characters are allowed.
     * This field must be null if subfolder suffix is not already defined for the web presence.
     */
    public function setSubfolderSuffix($subfolderSuffix): static
    {
        $this->subfolderSuffix = $subfolderSuffix;

        return $this;
    }
}
