<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines usage-based pricing terms for app subscriptions where merchants pay based on their actual consumption of app features or services. This pricing model provides flexibility for merchants who want to pay only for what they use rather than fixed monthly fees.
 *
 * For example, an email marketing app might charge variable pricing per email sent, with a monthly cap of variable pricing, allowing small merchants to pay minimal amounts while protecting larger merchants from excessive charges.
 *
 * Use the `AppUsagePricing` object to:
 * - View consumption-based billing for variable app usage
 * - See spending caps that protect merchants from unexpected charges
 *
 * The balance and capped amount fields provide apps with data about current usage costs and remaining budget within the billing period, which apps can present to merchants to promote transparency in variable pricing.
 *
 * For implementation guidance, see the [usage billing documentation](https://shopify.dev/docs/apps/launch/billing/subscription-billing/create-usage-based-subscriptions).
 */
class ShopifyAppUsagePricingQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppUsagePricing";

    /**
     * The total usage records for interval.
     */
    public function selectBalanceUsed(?ShopifyAppUsagePricingBalanceUsedArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("balanceUsed");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The capped amount prevents the merchant from being charged for any usage over that amount during a billing period.
     * This prevents billing from exceeding a maximum threshold over the duration of the billing period.
     * For the merchant to continue using the app after exceeding a capped amount, they would need to agree to a new usage charge.
     */
    public function selectCappedAmount(?ShopifyAppUsagePricingCappedAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("cappedAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The frequency with which the app usage records are billed.
     */
    public function selectInterval(): static
    {
        $this->selectField("interval");

        return $this;
    }

    /**
     * The terms and conditions for app usage pricing.
     * Must be present in order to create usage charges.
     * The terms are presented to the merchant when they approve an app's usage charges.
     */
    public function selectTerms(): static
    {
        $this->selectField("terms");

        return $this;
    }
}
