<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to update an externally managed marketing activity.
 */
class ShopifyMarketingActivityUpdateExternalInputInputObject extends InputObject
{
    protected $title;
    protected $budget;
    protected $adSpend;
    protected $remoteUrl;
    protected $remotePreviewImageUrl;
    protected $tactic;
    protected $marketingChannelType;
    protected $referringDomain;
    protected $scheduledStart;
    protected $scheduledEnd;
    protected $start;
    protected $end;
    protected $status;

    /**
     * The title of the marketing activity.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The budget for this marketing activity.
     */
    public function setBudget(ShopifyMarketingActivityBudgetInputInputObject $shopifyMarketingActivityBudgetInputInputObject): static
    {
        $this->budget = $shopifyMarketingActivityBudgetInputInputObject;

        return $this;
    }

    /**
     * The amount spent on the marketing activity.
     */
    public function setAdSpend(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->adSpend = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The URL for viewing and/or managing the activity outside of Shopify.
     */
    public function setRemoteUrl($remoteUrl): static
    {
        $this->remoteUrl = $remoteUrl;

        return $this;
    }

    /**
     * The URL for a preview image that's used for the marketing activity.
     */
    public function setRemotePreviewImageUrl($remotePreviewImageUrl): static
    {
        $this->remotePreviewImageUrl = $remotePreviewImageUrl;

        return $this;
    }

    /**
     * The method of marketing used for this marketing activity. The marketing tactic determines which default fields are included in the marketing activity.
     */
    public function setTactic($shopifyMarketingTactic): static
    {
        $this->tactic = new RawObject($shopifyMarketingTactic);

        return $this;
    }

    /**
     * The medium through which the marketing activity and event reached consumers. This is used for reporting aggregation.
     */
    public function setMarketingChannelType($shopifyMarketingChannel): static
    {
        $this->marketingChannelType = new RawObject($shopifyMarketingChannel);

        return $this;
    }

    /**
     * The domain from which ad clicks are forwarded to the shop.
     */
    public function setReferringDomain($referringDomain): static
    {
        $this->referringDomain = $referringDomain;

        return $this;
    }

    /**
     * The date and time at which the activity is scheduled to start.
     */
    public function setScheduledStart($scheduledStart): static
    {
        $this->scheduledStart = $scheduledStart;

        return $this;
    }

    /**
     * The date and time at which the activity is scheduled to end.
     */
    public function setScheduledEnd($scheduledEnd): static
    {
        $this->scheduledEnd = $scheduledEnd;

        return $this;
    }

    /**
     * The date and time at which the activity started.
     */
    public function setStart($start): static
    {
        $this->start = $start;

        return $this;
    }

    /**
     * The date and time at which the activity ended.
     */
    public function setEnd($end): static
    {
        $this->end = $end;

        return $this;
    }

    /**
     * The status of the marketing activity.
     */
    public function setStatus($shopifyMarketingActivityExternalStatus): static
    {
        $this->status = new RawObject($shopifyMarketingActivityExternalStatus);

        return $this;
    }
}
