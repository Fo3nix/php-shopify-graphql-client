<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Marketing engagement represents customer activity taken on a marketing activity.
 */
class ShopifyMarketingEngagementQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingEngagement";

    /**
     * The total ad spend for the marketing content. Recurring weekly, monthly, or yearly spend needs to be divided into daily amounts.
     */
    public function selectAdSpend(?ShopifyMarketingEngagementAdSpendArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("adSpend");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of all conversions from the marketing content. This field supports ad platforms that track conversions beyond traditional sales metrics. All conversions include both primary and secondary conversion goals as defined by the ad platform, such as purchases, add-to-carts, page views, and sign-ups.
     */
    public function selectAllConversions(): static
    {
        $this->selectField("allConversions");

        return $this;
    }

    /**
     * The unique string identifier of the channel to which the engagement metrics are being provided.
     *
     * @deprecated Channel-level engagements are deprecated. Provide engagement metrics on a marketing activity using `marketingActivityId` or `remoteId` instead.
     */
    public function selectChannelHandle(): static
    {
        $this->selectField("channelHandle");

        return $this;
    }

    /**
     * The total number of interactions, such as a button press or a screen touch, that occurred on the marketing content.
     */
    public function selectClicksCount(): static
    {
        $this->selectField("clicksCount");

        return $this;
    }

    /**
     * The total number of comments on the marketing content.
     */
    public function selectCommentsCount(): static
    {
        $this->selectField("commentsCount");

        return $this;
    }

    /**
     * The total number of complaints on the marketing content. For message-based platforms such as email or SMS, this represents the number of marketing emails or messages that were marked as spam. For social media platforms, this represents the number of dislikes or the number of times marketing content was reported.
     */
    public function selectComplaintsCount(): static
    {
        $this->selectField("complaintsCount");

        return $this;
    }

    /**
     * The total number of fails for the marketing content. For message-based platforms such as email or SMS, this represents the number of bounced marketing emails or messages.
     */
    public function selectFailsCount(): static
    {
        $this->selectField("failsCount");

        return $this;
    }

    /**
     * The total number of favorites, likes, saves, or bookmarks on the marketing content.
     */
    public function selectFavoritesCount(): static
    {
        $this->selectField("favoritesCount");

        return $this;
    }

    /**
     * The number of customers that have placed their first order. Doesn't include adjustments such as edits, exchanges, or returns.
     */
    public function selectFirstTimeCustomers(): static
    {
        $this->selectField("firstTimeCustomers");

        return $this;
    }

    /**
     * The total number of times marketing content was displayed to users, whether or not an interaction occurred. For message-based platforms such as email or SMS, this represents the number of marketing emails or messages that were delivered.
     */
    public function selectImpressionsCount(): static
    {
        $this->selectField("impressionsCount");

        return $this;
    }

    /**
     * Specifies how the provided metrics have been aggregated. Cumulative metrics are aggregated from the first day of reporting up to and including `occurredOn`. Non-cumulative metrics are aggregated over the single day indicated in `occurredOn`. Cumulative metrics will monotonically increase in time as each record includes the previous day's values, and so on. Non-cumulative metrics are required going forward; cumulative metrics are deprecated.
     *
     * @deprecated Cumulative metrics are being phased out. Send non-cumulative engagement metrics instead (values aggregated over the single day indicated in `occurredOn`, with `isCumulative: false`). Existing activities that have been sending cumulative metrics can migrate to non-cumulative at any time.
     */
    public function selectIsCumulative(): static
    {
        $this->selectField("isCumulative");

        return $this;
    }

    /**
     * The marketing activity object related to this engagement. This corresponds to the marketingActivityId passed in on creation of the engagement.
     */
    public function selectMarketingActivity(?ShopifyMarketingEngagementMarketingActivityArgumentsObject $argsObject = null): ShopifyMarketingActivityQueryObject
    {
        $object = new ShopifyMarketingActivityQueryObject("marketingActivity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The calendar date (in the time zone offset specified by the utcOffset field) for which the metrics are being reported. For example, a shop in UTC-5 would set utcOffset="-05:00" and aggregate all engagements from 05:00:00Z up to 29:00:00Z (5am UTC next day) for each call.
     */
    public function selectOccurredOn(): static
    {
        $this->selectField("occurredOn");

        return $this;
    }

    /**
     * The number of orders generated from the marketing content.
     */
    public function selectOrders(): static
    {
        $this->selectField("orders");

        return $this;
    }

    /**
     * The number of primary conversions from the marketing content. This field supports ad platforms that track conversions beyond traditional sales metrics. Primary conversions represent the main conversion goal defined by the ad platform, such as purchases, sign-ups, or add-to-carts.
     */
    public function selectPrimaryConversions(): static
    {
        $this->selectField("primaryConversions");

        return $this;
    }

    /**
     * The number of returning customers that have placed an order. Doesn't include adjustments such as edits, exchanges, or returns.
     */
    public function selectReturningCustomers(): static
    {
        $this->selectField("returningCustomers");

        return $this;
    }

    /**
     * The amount of sales generated from the marketing content.
     */
    public function selectSales(?ShopifyMarketingEngagementSalesArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("sales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of marketing emails or messages that were sent.
     */
    public function selectSendsCount(): static
    {
        $this->selectField("sendsCount");

        return $this;
    }

    /**
     * The number of online store sessions generated from the marketing content.
     */
    public function selectSessionsCount(): static
    {
        $this->selectField("sessionsCount");

        return $this;
    }

    /**
     * The total number of times marketing content was distributed or reposted to either one's own network of followers through a social media platform or other digital channels. For message-based platforms such as email or SMS, this represents the number of times marketing emails or messages were forwarded.
     */
    public function selectSharesCount(): static
    {
        $this->selectField("sharesCount");

        return $this;
    }

    /**
     * The total number of unique clicks on the marketing content.
     */
    public function selectUniqueClicksCount(): static
    {
        $this->selectField("uniqueClicksCount");

        return $this;
    }

    /**
     * The total number of all users who saw marketing content since it was published. For  message-based platforms such as email or SMS, this represents the number of unique users that opened a  marketing email or message. For video-based content, this represents the number of unique users that  played video content.
     */
    public function selectUniqueViewsCount(): static
    {
        $this->selectField("uniqueViewsCount");

        return $this;
    }

    /**
     * The total number of unsubscribes on the marketing content. For social media platforms, this represents the number of unfollows.
     */
    public function selectUnsubscribesCount(): static
    {
        $this->selectField("unsubscribesCount");

        return $this;
    }

    /**
     * The UTC offset for the time zone in which the metrics are being reported, in the format `"+HH:MM"` or `"-HH:MM"`. Used in combination with occurredOn when aggregating daily metrics. Must match the account settings for the shop to minimize eventual discrepancies in reporting.
     */
    public function selectUtcOffset(): static
    {
        $this->selectField("utcOffset");

        return $this;
    }

    /**
     * The total number of views on the marketing content. For message-based platforms such as email or SMS, this represents the number of times marketing emails or messages were opened. For video-based content, this represents the number of times videos were played.
     */
    public function selectViewsCount(): static
    {
        $this->selectField("viewsCount");

        return $this;
    }
}
