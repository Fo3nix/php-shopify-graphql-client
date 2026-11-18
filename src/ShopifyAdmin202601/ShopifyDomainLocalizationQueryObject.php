<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The country and language settings assigned to a domain.
 */
class ShopifyDomainLocalizationQueryObject extends QueryObject
{
    const OBJECT_NAME = "DomainLocalization";

    /**
     * The ISO codes for the domain’s alternate locales. For example, `["en"]`.
     */
    public function selectAlternateLocales(): static
    {
        $this->selectField("alternateLocales");

        return $this;
    }

    /**
     * The ISO code for the country assigned to the domain. For example, `"CA"` or "*" for a domain set to "Rest of world".
     */
    public function selectCountry(): static
    {
        $this->selectField("country");

        return $this;
    }

    /**
     * The ISO code for the domain’s default locale. For example, `"en"`.
     */
    public function selectDefaultLocale(): static
    {
        $this->selectField("defaultLocale");

        return $this;
    }
}
