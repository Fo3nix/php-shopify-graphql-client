<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPrivacyPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "PrivacyPolicy";

    public function selectAutoManaged()
    {
        $this->selectField("autoManaged");

        return $this;
    }

    public function selectSupportedLocales()
    {
        $this->selectField("supportedLocales");

        return $this;
    }
}
