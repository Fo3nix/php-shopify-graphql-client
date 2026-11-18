<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The shipping lines to which the price rule applies to.
 */
class ShopifyPriceRuleShippingLineEntitlementsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceRuleShippingLineEntitlements";

    /**
     * The codes for the countries to which the price rule applies to.
     */
    public function selectCountryCodes(): static
    {
        $this->selectField("countryCodes");

        return $this;
    }

    /**
     * Whether the price rule is applicable to countries that haven't been defined in the shop's shipping zones.
     *
     * @deprecated This field is being retired. Price rules that set `includeRestOfWorld: true` will be converted to an explicit list of countries, and `countryCodes` will then return every country where the price rule applies.
     */
    public function selectIncludeRestOfWorld(): static
    {
        $this->selectField("includeRestOfWorld");

        return $this;
    }

    /**
     * Whether the price rule applies to all shipping lines.
     */
    public function selectTargetAllShippingLines(): static
    {
        $this->selectField("targetAllShippingLines");

        return $this;
    }
}
