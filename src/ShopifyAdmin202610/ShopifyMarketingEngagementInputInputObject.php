<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a marketing engagement.
 */
class ShopifyMarketingEngagementInputInputObject extends InputObject
{
    const REQUIRED = ["occurredOn", "utcOffset"];

    protected $occurredOn;
    protected $impressionsCount;
    protected $viewsCount;
    protected $clicksCount;
    protected $sharesCount;
    protected $favoritesCount;
    protected $commentsCount;
    protected $unsubscribesCount;
    protected $complaintsCount;
    protected $failsCount;
    protected $sendsCount;
    protected $uniqueViewsCount;
    protected $uniqueClicksCount;
    protected $adSpend;
    protected $utcOffset;
    protected $sales;
    protected $sessionsCount;
    protected $orders;
    protected $firstTimeCustomers;
    protected $returningCustomers;
    protected $primaryConversions;
    protected $allConversions;

    /**
     * The calendar date (in the time zone offset specified by the utcOffset field) for which the metrics are being reported. For example, a shop in UTC-5 would set utcOffset="-05:00" and aggregate all engagements from 05:00:00Z up to 29:00:00Z (5am UTC next day) for each call.
     */
    public function setOccurredOn($occurredOn): static
    {
        $this->occurredOn = $occurredOn;

        return $this;
    }

    /**
     * The total number of times marketing content was displayed to users, whether or not an interaction occurred. For message-based platforms such as email or SMS, this represents the number of marketing emails or messages that were delivered.
     */
    public function setImpressionsCount($impressionsCount): static
    {
        $this->impressionsCount = $impressionsCount;

        return $this;
    }

    /**
     * The total number of views on the marketing content. For message-based platforms such as email or SMS, this represents the number of times marketing emails or messages were opened. For video-based content, this represents the number of times videos were played.
     */
    public function setViewsCount($viewsCount): static
    {
        $this->viewsCount = $viewsCount;

        return $this;
    }

    /**
     * The total number of interactions, such as a button press or a screen touch, that occurred on the marketing content.
     */
    public function setClicksCount($clicksCount): static
    {
        $this->clicksCount = $clicksCount;

        return $this;
    }

    /**
     * The total number of times marketing content was distributed or reposted to either one's own network of followers through a social media platform or other digital channels. For message-based platforms such as email or SMS, this represents the number of times marketing emails or messages were forwarded.
     */
    public function setSharesCount($sharesCount): static
    {
        $this->sharesCount = $sharesCount;

        return $this;
    }

    /**
     * The total number of favorites, likes, saves, or bookmarks on the marketing content.
     */
    public function setFavoritesCount($favoritesCount): static
    {
        $this->favoritesCount = $favoritesCount;

        return $this;
    }

    /**
     * The total number of comments on the marketing content.
     */
    public function setCommentsCount($commentsCount): static
    {
        $this->commentsCount = $commentsCount;

        return $this;
    }

    /**
     * The total number of unsubscribes on the marketing content. For social media platforms, this represents the number of unfollows.
     */
    public function setUnsubscribesCount($unsubscribesCount): static
    {
        $this->unsubscribesCount = $unsubscribesCount;

        return $this;
    }

    /**
     * The total number of complaints on the marketing content. For message-based platforms such as email or SMS, this represents the number of marketing emails or messages that were marked as spam. For social media platforms, this represents the number of dislikes or the number of times marketing content was reported.
     */
    public function setComplaintsCount($complaintsCount): static
    {
        $this->complaintsCount = $complaintsCount;

        return $this;
    }

    /**
     * The total number of fails for the marketing content. For message-based platforms such as email or SMS, this represents the number of bounced marketing emails or messages.
     */
    public function setFailsCount($failsCount): static
    {
        $this->failsCount = $failsCount;

        return $this;
    }

    /**
     * The total number of marketing emails or messages that were sent.
     */
    public function setSendsCount($sendsCount): static
    {
        $this->sendsCount = $sendsCount;

        return $this;
    }

    /**
     * The total number of all users who saw marketing content since it was published. For  message-based platforms such as email or SMS, this represents the number of unique users that opened a  marketing email or message. For video-based content, this represents the number of unique users that  played video content.
     */
    public function setUniqueViewsCount($uniqueViewsCount): static
    {
        $this->uniqueViewsCount = $uniqueViewsCount;

        return $this;
    }

    /**
     * The total number of unique clicks on the marketing content.
     */
    public function setUniqueClicksCount($uniqueClicksCount): static
    {
        $this->uniqueClicksCount = $uniqueClicksCount;

        return $this;
    }

    /**
     * The total ad spend for the marketing content. Recurring weekly, monthly, or yearly spend needs to be divided into daily amounts.
     */
    public function setAdSpend(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->adSpend = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The UTC offset for the time zone in which the metrics are being reported, in the format `"+HH:MM"` or `"-HH:MM"`. Used in combination with occurredOn when aggregating daily metrics. Must match the account settings for the shop to minimize eventual discrepancies in reporting.
     */
    public function setUtcOffset($utcOffset): static
    {
        $this->utcOffset = $utcOffset;

        return $this;
    }

    /**
     * The amount of sales generated from the marketing content.
     */
    public function setSales(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->sales = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The number of online store sessions generated from the marketing content.
     */
    public function setSessionsCount($sessionsCount): static
    {
        $this->sessionsCount = $sessionsCount;

        return $this;
    }

    /**
     * The number of orders generated from the marketing content.
     */
    public function setOrders($orders): static
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * The number of customers that have placed their first order. Doesn't include adjustments such as edits, exchanges, or returns.
     */
    public function setFirstTimeCustomers($firstTimeCustomers): static
    {
        $this->firstTimeCustomers = $firstTimeCustomers;

        return $this;
    }

    /**
     * The number of returning customers that have placed an order. Doesn't include adjustments such as edits, exchanges, or returns.
     */
    public function setReturningCustomers($returningCustomers): static
    {
        $this->returningCustomers = $returningCustomers;

        return $this;
    }

    /**
     * The number of primary conversions from the marketing content. This field supports ad platforms that track conversions beyond traditional sales metrics. Primary conversions represent the main conversion goal defined by the ad platform, such as purchases, sign-ups, or add-to-carts.
     */
    public function setPrimaryConversions($primaryConversions): static
    {
        $this->primaryConversions = $primaryConversions;

        return $this;
    }

    /**
     * The number of all conversions from the marketing content. This field supports ad platforms that track conversions beyond traditional sales metrics. All conversions include both primary and secondary conversion goals as defined by the ad platform, such as purchases, add-to-carts, page views, and sign-ups.
     */
    public function setAllConversions($allConversions): static
    {
        $this->allConversions = $allConversions;

        return $this;
    }
}
