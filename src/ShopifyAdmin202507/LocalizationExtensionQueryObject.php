<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class LocalizationExtensionQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocalizationExtension";

    public function selectCountryCode()
    {
        $this->selectField("countryCode");

        return $this;
    }

    public function selectKey()
    {
        $this->selectField("key");

        return $this;
    }

    public function selectPurpose()
    {
        $this->selectField("purpose");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
