<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDomainLocalizationQueryObject extends QueryObject
{
    const OBJECT_NAME = "DomainLocalization";

    public function selectAlternateLocales()
    {
        $this->selectField("alternateLocales");

        return $this;
    }

    public function selectCountry()
    {
        $this->selectField("country");

        return $this;
    }

    public function selectDefaultLocale()
    {
        $this->selectField("defaultLocale");

        return $this;
    }
}
