<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the tax settings for a company location.
 */
class ShopifyCompanyLocationTaxSettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationTaxSettings";

    /**
     * Whether the location is exempt from taxes.
     */
    public function selectTaxExempt(): static
    {
        $this->selectField("taxExempt");

        return $this;
    }

    /**
     * The list of tax exemptions applied to the location.
     */
    public function selectTaxExemptions(): static
    {
        $this->selectField("taxExemptions");

        return $this;
    }

    /**
     * The tax registration ID for the company location.
     */
    public function selectTaxRegistrationId(): static
    {
        $this->selectField("taxRegistrationId");

        return $this;
    }
}
