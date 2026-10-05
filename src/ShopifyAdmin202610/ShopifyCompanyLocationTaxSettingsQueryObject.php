<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyLocationTaxSettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationTaxSettings";

    public function selectTaxExempt()
    {
        $this->selectField("taxExempt");

        return $this;
    }

    public function selectTaxExemptions()
    {
        $this->selectField("taxExemptions");

        return $this;
    }

    public function selectTaxRegistrationId()
    {
        $this->selectField("taxRegistrationId");

        return $this;
    }
}
