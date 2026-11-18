<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A customer's session on the online store. Tracks how the [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) arrived at the store, including the landing page, referral source, and any associated marketing campaigns.
 *
 * The visit captures attribution data such as [`UTMParameters`](https://shopify.dev/docs/api/admin-graphql/latest/objects/UTMParameters), referral codes, and the [`MarketingEvent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MarketingEvent) that drove the session. This information helps merchants understand which marketing efforts successfully bring customers to their store.
 */
class ShopifyCustomerVisitQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerVisit";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * URL of the first page the customer landed on for the session.
     */
    public function selectLandingPage(): static
    {
        $this->selectField("landingPage");

        return $this;
    }

    /**
     * Landing page information with URL linked in HTML. For example, the first page the customer visited was store.myshopify.com/products/1.
     */
    public function selectLandingPageHtml(): static
    {
        $this->selectField("landingPageHtml");

        return $this;
    }

    /**
     * Represent actions taken by an app, on behalf of a merchant,
     * to market Shopify resources such as products, collections, and discounts.
     */
    public function selectMarketingEvent(?ShopifyCustomerVisitMarketingEventArgumentsObject $argsObject = null): ShopifyMarketingEventQueryObject
    {
        $object = new ShopifyMarketingEventQueryObject("marketingEvent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the customer's session occurred.
     */
    public function selectOccurredAt(): static
    {
        $this->selectField("occurredAt");

        return $this;
    }

    /**
     * Marketing referral code from the link that the customer clicked to visit the store.
     * Supports the following URL attributes: _ref_, _source_, or _r_.
     * For example, if the URL is myshopifystore.com/products/slide?ref=j2tj1tn2, then this value is j2tj1tn2.
     */
    public function selectReferralCode(): static
    {
        $this->selectField("referralCode");

        return $this;
    }

    /**
     * Referral information with URLs linked in HTML.
     */
    public function selectReferralInfoHtml(): static
    {
        $this->selectField("referralInfoHtml");

        return $this;
    }

    /**
     * Webpage where the customer clicked a link that sent them to the online store.
     * For example, _https://randomblog.com/page1_ or _android-app://com.google.android.gm_.
     */
    public function selectReferrerUrl(): static
    {
        $this->selectField("referrerUrl");

        return $this;
    }

    /**
     * Source from which the customer visited the store, such as a platform (Facebook, Google), email, direct,
     * a website domain, QR code, or unknown.
     */
    public function selectSource(): static
    {
        $this->selectField("source");

        return $this;
    }

    /**
     * Describes the source explicitly for first or last session.
     */
    public function selectSourceDescription(): static
    {
        $this->selectField("sourceDescription");

        return $this;
    }

    /**
     * Type of marketing tactic.
     */
    public function selectSourceType(): static
    {
        $this->selectField("sourceType");

        return $this;
    }

    /**
     * A set of UTM parameters gathered from the URL parameters of the referrer.
     */
    public function selectUtmParameters(?ShopifyCustomerVisitUtmParametersArgumentsObject $argsObject = null): ShopifyUTMParametersQueryObject
    {
        $object = new ShopifyUTMParametersQueryObject("utmParameters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
