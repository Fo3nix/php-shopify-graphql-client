<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRolloutTreatmentChangesArgumentsObject extends ArgumentsObject
{
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $query;

    /**
     * The first `n` elements from the [paginated list](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function setFirst($first): static
    {
        $this->first = $first;

        return $this;
    }

    /**
     * The elements that come after the specified [cursor](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function setAfter($after): static
    {
        $this->after = $after;

        return $this;
    }

    /**
     * The last `n` elements from the [paginated list](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function setLast($last): static
    {
        $this->last = $last;

        return $this;
    }

    /**
     * The elements that come before the specified [cursor](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function setBefore($before): static
    {
        $this->before = $before;

        return $this;
    }

    /**
     * Reverse the order of the underlying list.
     */
    public function setReverse($reverse): static
    {
        $this->reverse = $reverse;

        return $this;
    }

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | catalog_id | string | Filter by the catalog's numeric ID or quoted Catalog or concrete catalog GID (for example, MarketCatalog). Matches activate and draft changes. | | | - `catalog_id:1112223334`<br/> - `catalog_id:'gid://shopify/MarketCatalog/1112223334'`<br/> - `catalog_id:42 AND type:RolloutCatalogDraftChange` |
     * | checkout_and_accounts_configuration_id | string | Filter by either the swap source or publish target configuration's numeric ID or quoted CheckoutAndAccountsConfiguration GID. | | | - `checkout_and_accounts_configuration_id:1112223334`<br/> - `checkout_and_accounts_configuration_id:'gid://shopify/CheckoutAndAccountsConfiguration/1112223334'`<br/> - `checkout_and_accounts_configuration_id:42 AND type:RolloutCheckoutAndAccountsConfigurationPublishChange` |
     * | discount_id | string | Filter by the discount's numeric ID or GID. | | | - `discount_id:1112223334`<br/> - `discount_id:'gid://shopify/DiscountNode/1112223334'` |
     * | theme_id | string | Filter by the publish target theme's numeric ID or quoted OnlineStoreTheme GID. Does not match the swap source. | | | - `theme_id:1112223334`<br/> - `theme_id:'gid://shopify/OnlineStoreTheme/1112223334'`<br/> - `theme_id:42 AND type:RolloutThemePublishChange` |
     * | type | string | Filter by an exact, case-sensitive public change typename. Unknown typenames match no changes. Combine type and resource-ID filters with uppercase AND, OR, and parentheses. Whitespace between predicates means AND. OR binds more tightly than AND, following the standard search syntax; use parentheses to group predicates. Each resource-ID predicate matches only readable, available resources within its branch. Quote GIDs with single or double quotes. Negation, ranges, and wildcards are not supported. | - `RolloutDiscountActivateChange`<br/> - `RolloutDiscountExpireChange`<br/> - `RolloutCatalogActivateChange`<br/> - `RolloutCatalogDraftChange`<br/> - `RolloutThemePublishChange`<br/> - `RolloutCheckoutAndAccountsConfigurationPublishChange` | | - `type:RolloutThemePublishChange`<br/> - `type:RolloutDiscountActivateChange OR type:RolloutDiscountExpireChange`<br/> - `type:RolloutDiscountExpireChange AND discount_id:1112223334`<br/> - `(type:RolloutDiscountActivateChange AND discount_id:42) OR (type:RolloutDiscountExpireChange AND discount_id:99)`<br/> - `discount_id:42 AND (type:RolloutDiscountActivateChange OR type:RolloutDiscountExpireChange)` |
     * You can apply one or more filters to a query. Learn more about [Shopify API search syntax](https://shopify.dev/api/usage/search-syntax).
     */
    public function setQuery($query): static
    {
        $this->query = $query;

        return $this;
    }
}
