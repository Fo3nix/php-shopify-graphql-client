<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMarketingActivity;
use Carbon\Carbon;

/**
 * Marketing engagement represents customer activity taken on a marketing activity.
 */
class ShopifyMarketingEngagement
{
    protected $adSpend;
    protected $allConversions;
    protected $channelHandle;
    protected $clicksCount;
    protected $commentsCount;
    protected $complaintsCount;
    protected $failsCount;
    protected $favoritesCount;
    protected $firstTimeCustomers;
    protected $impressionsCount;
    protected $isCumulative;
    protected $marketingActivity;
    protected $occurredOn;
    protected $orders;
    protected $primaryConversions;
    protected $returningCustomers;
    protected $sales;
    protected $sendsCount;
    protected $sessionsCount;
    protected $sharesCount;
    protected $uniqueClicksCount;
    protected $uniqueViewsCount;
    protected $unsubscribesCount;
    protected $utcOffset;
    protected $viewsCount;

    
    /**
     * The total ad spend for the marketing content. Recurring weekly, monthly, or yearly spend needs to be divided into daily amounts.
     *
     * @return ShopifyMoneyV2
     */
    public function getAdSpend(): ?ShopifyMoneyV2
    {
        return $this->adSpend;
    }

    
    /**
     * The number of all conversions from the marketing content. This field supports ad platforms that track conversions beyond traditional sales metrics. All conversions include both primary and secondary conversion goals as defined by the ad platform, such as purchases, add-to-carts, page views, and sign-ups.
     *
     * @return string
     */
    public function getAllConversions(): mixed
    {
        return $this->allConversions;
    }

    
    /**
     * The unique string identifier of the channel to which the engagement metrics are being provided.
     *
     * @return string
     */
    public function getChannelHandle(): ?string
    {
        return $this->channelHandle;
    }

    
    /**
     * The total number of interactions, such as a button press or a screen touch, that occurred on the marketing content.
     *
     * @return int
     */
    public function getClicksCount(): ?int
    {
        return $this->clicksCount;
    }

    
    /**
     * The total number of comments on the marketing content.
     *
     * @return int
     */
    public function getCommentsCount(): ?int
    {
        return $this->commentsCount;
    }

    
    /**
     * The total number of complaints on the marketing content. For message-based platforms such as email or SMS, this represents the number of marketing emails or messages that were marked as spam. For social media platforms, this represents the number of dislikes or the number of times marketing content was reported.
     *
     * @return int
     */
    public function getComplaintsCount(): ?int
    {
        return $this->complaintsCount;
    }

    
    /**
     * The total number of fails for the marketing content. For message-based platforms such as email or SMS, this represents the number of bounced marketing emails or messages.
     *
     * @return int
     */
    public function getFailsCount(): ?int
    {
        return $this->failsCount;
    }

    
    /**
     * The total number of favorites, likes, saves, or bookmarks on the marketing content.
     *
     * @return int
     */
    public function getFavoritesCount(): ?int
    {
        return $this->favoritesCount;
    }

    
    /**
     * The number of customers that have placed their first order. Doesn't include adjustments such as edits, exchanges, or returns.
     *
     * @return string
     */
    public function getFirstTimeCustomers(): mixed
    {
        return $this->firstTimeCustomers;
    }

    
    /**
     * The total number of times marketing content was displayed to users, whether or not an interaction occurred. For message-based platforms such as email or SMS, this represents the number of marketing emails or messages that were delivered.
     *
     * @return int
     */
    public function getImpressionsCount(): ?int
    {
        return $this->impressionsCount;
    }

    
    /**
     * Specifies how the provided metrics have been aggregated. Cumulative metrics are aggregated from the first day of reporting up to and including `occurredOn`. Non-cumulative metrics are aggregated over the single day indicated in `occurredOn`. Cumulative metrics will monotonically increase in time as each record includes the previous day's values, and so on. Non-cumulative metrics are required going forward; cumulative metrics are deprecated.
     *
     * @return bool
     */
    public function getIsCumulative(): ?bool
    {
        return $this->isCumulative;
    }

    
    /**
     * The marketing activity object related to this engagement. This corresponds to the marketingActivityId passed in on creation of the engagement.
     *
     * @return ShopifyMarketingActivity
     */
    public function getMarketingActivity(): ?ShopifyMarketingActivity
    {
        return $this->marketingActivity;
    }

    
    /**
     * The calendar date (in the time zone offset specified by the utcOffset field) for which the metrics are being reported. For example, a shop in UTC-5 would set utcOffset="-05:00" and aggregate all engagements from 05:00:00Z up to 29:00:00Z (5am UTC next day) for each call.
     *
     * @return Carbon
     */
    public function getOccurredOn(): ?Carbon
    {
        return $this->occurredOn;
    }

    
    /**
     * The number of orders generated from the marketing content.
     *
     * @return string
     */
    public function getOrders(): mixed
    {
        return $this->orders;
    }

    
    /**
     * The number of primary conversions from the marketing content. This field supports ad platforms that track conversions beyond traditional sales metrics. Primary conversions represent the main conversion goal defined by the ad platform, such as purchases, sign-ups, or add-to-carts.
     *
     * @return string
     */
    public function getPrimaryConversions(): mixed
    {
        return $this->primaryConversions;
    }

    
    /**
     * The number of returning customers that have placed an order. Doesn't include adjustments such as edits, exchanges, or returns.
     *
     * @return string
     */
    public function getReturningCustomers(): mixed
    {
        return $this->returningCustomers;
    }

    
    /**
     * The amount of sales generated from the marketing content.
     *
     * @return ShopifyMoneyV2
     */
    public function getSales(): ?ShopifyMoneyV2
    {
        return $this->sales;
    }

    
    /**
     * The total number of marketing emails or messages that were sent.
     *
     * @return int
     */
    public function getSendsCount(): ?int
    {
        return $this->sendsCount;
    }

    
    /**
     * The number of online store sessions generated from the marketing content.
     *
     * @return int
     */
    public function getSessionsCount(): ?int
    {
        return $this->sessionsCount;
    }

    
    /**
     * The total number of times marketing content was distributed or reposted to either one's own network of followers through a social media platform or other digital channels. For message-based platforms such as email or SMS, this represents the number of times marketing emails or messages were forwarded.
     *
     * @return int
     */
    public function getSharesCount(): ?int
    {
        return $this->sharesCount;
    }

    
    /**
     * The total number of unique clicks on the marketing content.
     *
     * @return int
     */
    public function getUniqueClicksCount(): ?int
    {
        return $this->uniqueClicksCount;
    }

    
    /**
     * The total number of all users who saw marketing content since it was published. For  message-based platforms such as email or SMS, this represents the number of unique users that opened a  marketing email or message. For video-based content, this represents the number of unique users that  played video content.
     *
     * @return int
     */
    public function getUniqueViewsCount(): ?int
    {
        return $this->uniqueViewsCount;
    }

    
    /**
     * The total number of unsubscribes on the marketing content. For social media platforms, this represents the number of unfollows.
     *
     * @return int
     */
    public function getUnsubscribesCount(): ?int
    {
        return $this->unsubscribesCount;
    }

    
    /**
     * The UTC offset for the time zone in which the metrics are being reported, in the format `"+HH:MM"` or `"-HH:MM"`. Used in combination with occurredOn when aggregating daily metrics. Must match the account settings for the shop to minimize eventual discrepancies in reporting.
     *
     * @return string
     */
    public function getUtcOffset(): mixed
    {
        return $this->utcOffset;
    }

    
    /**
     * The total number of views on the marketing content. For message-based platforms such as email or SMS, this represents the number of times marketing emails or messages were opened. For video-based content, this represents the number of times videos were played.
     *
     * @return int
     */
    public function getViewsCount(): ?int
    {
        return $this->viewsCount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['adSpend']) && $data['adSpend'] !== null) {
                $instance->adSpend = ShopifyMoneyV2::fromArray($data['adSpend']);
            }
            if (isset($data['allConversions']) && $data['allConversions'] !== null) {
                $instance->allConversions = $data['allConversions'];
            }
            if (isset($data['channelHandle']) && $data['channelHandle'] !== null) {
                $instance->channelHandle = $data['channelHandle'];
            }
            if (isset($data['clicksCount']) && $data['clicksCount'] !== null) {
                $instance->clicksCount = $data['clicksCount'];
            }
            if (isset($data['commentsCount']) && $data['commentsCount'] !== null) {
                $instance->commentsCount = $data['commentsCount'];
            }
            if (isset($data['complaintsCount']) && $data['complaintsCount'] !== null) {
                $instance->complaintsCount = $data['complaintsCount'];
            }
            if (isset($data['failsCount']) && $data['failsCount'] !== null) {
                $instance->failsCount = $data['failsCount'];
            }
            if (isset($data['favoritesCount']) && $data['favoritesCount'] !== null) {
                $instance->favoritesCount = $data['favoritesCount'];
            }
            if (isset($data['firstTimeCustomers']) && $data['firstTimeCustomers'] !== null) {
                $instance->firstTimeCustomers = $data['firstTimeCustomers'];
            }
            if (isset($data['impressionsCount']) && $data['impressionsCount'] !== null) {
                $instance->impressionsCount = $data['impressionsCount'];
            }
            if (isset($data['isCumulative']) && $data['isCumulative'] !== null) {
                $instance->isCumulative = $data['isCumulative'];
            }
            if (isset($data['marketingActivity']) && $data['marketingActivity'] !== null) {
                $instance->marketingActivity = ShopifyMarketingActivity::fromArray($data['marketingActivity']);
            }
            if (isset($data['occurredOn']) && $data['occurredOn'] !== null) {
                $instance->occurredOn = new Carbon($data['occurredOn']);
            }
            if (isset($data['orders']) && $data['orders'] !== null) {
                $instance->orders = $data['orders'];
            }
            if (isset($data['primaryConversions']) && $data['primaryConversions'] !== null) {
                $instance->primaryConversions = $data['primaryConversions'];
            }
            if (isset($data['returningCustomers']) && $data['returningCustomers'] !== null) {
                $instance->returningCustomers = $data['returningCustomers'];
            }
            if (isset($data['sales']) && $data['sales'] !== null) {
                $instance->sales = ShopifyMoneyV2::fromArray($data['sales']);
            }
            if (isset($data['sendsCount']) && $data['sendsCount'] !== null) {
                $instance->sendsCount = $data['sendsCount'];
            }
            if (isset($data['sessionsCount']) && $data['sessionsCount'] !== null) {
                $instance->sessionsCount = $data['sessionsCount'];
            }
            if (isset($data['sharesCount']) && $data['sharesCount'] !== null) {
                $instance->sharesCount = $data['sharesCount'];
            }
            if (isset($data['uniqueClicksCount']) && $data['uniqueClicksCount'] !== null) {
                $instance->uniqueClicksCount = $data['uniqueClicksCount'];
            }
            if (isset($data['uniqueViewsCount']) && $data['uniqueViewsCount'] !== null) {
                $instance->uniqueViewsCount = $data['uniqueViewsCount'];
            }
            if (isset($data['unsubscribesCount']) && $data['unsubscribesCount'] !== null) {
                $instance->unsubscribesCount = $data['unsubscribesCount'];
            }
            if (isset($data['utcOffset']) && $data['utcOffset'] !== null) {
                $instance->utcOffset = $data['utcOffset'];
            }
            if (isset($data['viewsCount']) && $data['viewsCount'] !== null) {
                $instance->viewsCount = $data['viewsCount'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->adSpend !== null) {
                $data['adSpend'] = $this->adSpend->asArray();
            }
            if ($this->allConversions !== null) {
                $data['allConversions'] = $this->allConversions;
            }
            if ($this->channelHandle !== null) {
                $data['channelHandle'] = $this->channelHandle;
            }
            if ($this->clicksCount !== null) {
                $data['clicksCount'] = $this->clicksCount;
            }
            if ($this->commentsCount !== null) {
                $data['commentsCount'] = $this->commentsCount;
            }
            if ($this->complaintsCount !== null) {
                $data['complaintsCount'] = $this->complaintsCount;
            }
            if ($this->failsCount !== null) {
                $data['failsCount'] = $this->failsCount;
            }
            if ($this->favoritesCount !== null) {
                $data['favoritesCount'] = $this->favoritesCount;
            }
            if ($this->firstTimeCustomers !== null) {
                $data['firstTimeCustomers'] = $this->firstTimeCustomers;
            }
            if ($this->impressionsCount !== null) {
                $data['impressionsCount'] = $this->impressionsCount;
            }
            if ($this->isCumulative !== null) {
                $data['isCumulative'] = $this->isCumulative;
            }
            if ($this->marketingActivity !== null) {
                $data['marketingActivity'] = $this->marketingActivity->asArray();
            }
            if ($this->occurredOn !== null) {
                $data['occurredOn'] = $this->occurredOn->toIso8601String();
            }
            if ($this->orders !== null) {
                $data['orders'] = $this->orders;
            }
            if ($this->primaryConversions !== null) {
                $data['primaryConversions'] = $this->primaryConversions;
            }
            if ($this->returningCustomers !== null) {
                $data['returningCustomers'] = $this->returningCustomers;
            }
            if ($this->sales !== null) {
                $data['sales'] = $this->sales->asArray();
            }
            if ($this->sendsCount !== null) {
                $data['sendsCount'] = $this->sendsCount;
            }
            if ($this->sessionsCount !== null) {
                $data['sessionsCount'] = $this->sessionsCount;
            }
            if ($this->sharesCount !== null) {
                $data['sharesCount'] = $this->sharesCount;
            }
            if ($this->uniqueClicksCount !== null) {
                $data['uniqueClicksCount'] = $this->uniqueClicksCount;
            }
            if ($this->uniqueViewsCount !== null) {
                $data['uniqueViewsCount'] = $this->uniqueViewsCount;
            }
            if ($this->unsubscribesCount !== null) {
                $data['unsubscribesCount'] = $this->unsubscribesCount;
            }
            if ($this->utcOffset !== null) {
                $data['utcOffset'] = $this->utcOffset;
            }
            if ($this->viewsCount !== null) {
                $data['viewsCount'] = $this->viewsCount;
            }
            return $data;
        }
}
