<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a merchant-defined goal for a specific analytics metric over a date range.
 * Merchants use analytics targets to track progress toward business objectives, such as reaching
 * a total sales amount or a number of orders within a given period.
 *
 * Each target is associated with a single metric and can optionally include filter expressions to
 * narrow the evaluated data. Use the
 * [`analyticsTargets`](https://shopify.dev/docs/api/admin-graphql/latest/queries/analyticsTargets) query
 * to retrieve targets, and the
 * [`analyticsTargetCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsTargetCreate),
 * [`analyticsTargetUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsTargetUpdate),
 * and [`analyticsTargetsDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsTargetsDelete)
 * mutations to manage them.
 */
class ShopifyAnalyticsTargetQueryObject extends QueryObject
{
    const OBJECT_NAME = "AnalyticsTarget";

    /**
     * The date and time when the analytics target was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The currency code stored on the target's expected value. Defaults to the shop currency when the target is created.
     */
    public function selectCurrencyCode(): static
    {
        $this->selectField("currencyCode");

        return $this;
    }

    /**
     * The end date of the period over which progress toward the target is measured.
     */
    public function selectEndDate(): static
    {
        $this->selectField("endDate");

        return $this;
    }

    /**
     * The goal value that the merchant aims to reach for the tracked metric within the target period. Must be greater than 0.
     */
    public function selectExpectedValue(): static
    {
        $this->selectField("expectedValue");

        return $this;
    }

    /**
     * An optional filter expression to narrow the data evaluated against this target. For example, `shipping_country = 'US'`.
     */
    public function selectFilters(): static
    {
        $this->selectField("filters");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The identifier of the analytics metric that this target tracks, such as `total_sales` or `orders`.
     */
    public function selectMetric(): static
    {
        $this->selectField("metric");

        return $this;
    }

    /**
     * A human-readable label for the target, such as `Q1 Sales Target`.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The target's expected value converted to a specified presentment currency. Returns `null` when the target metric isn't a money metric or the conversion rate is unavailable.
     */
    public function selectPresentmentExpectedValue(ShopifyAnalyticsTargetPresentmentExpectedValueArgumentsObject $argsObject): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("presentmentExpectedValue");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A generated [ShopifyQL](https://shopify.dev/docs/api/shopifyql) query string that fetches the current value of the tracked metric for this target's date range and filters.
     */
    public function selectShopifyqlQuery(): static
    {
        $this->selectField("shopifyqlQuery");

        return $this;
    }

    /**
     * The start date of the period over which progress toward the target is measured.
     */
    public function selectStartDate(): static
    {
        $this->selectField("startDate");

        return $this;
    }

    /**
     * The date and time when the analytics target was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
