<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DomainLocalizationQueryObject extends QueryObject
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
