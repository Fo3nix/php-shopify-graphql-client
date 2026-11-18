<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for creating an externally-managed marketing activity.
 */
class ShopifyMarketingActivityCreateExternalInputInputObject extends InputObject
{
    const REQUIRED = ["title", "remoteUrl", "tactic", "marketingChannelType"];

    protected $title;
    protected $utm;
    protected $urlParameterValue;
    protected $budget;
    protected $adSpend;
    protected $remoteId;
    protected $status;
    protected $remoteUrl;
    protected $remotePreviewImageUrl;
    protected $tactic;
    protected $marketingChannelType;
    protected $referringDomain;
    protected $channelHandle;
    protected $scheduledStart;
    protected $scheduledEnd;
    protected $start;
    protected $end;
    protected $parentActivityId;
    protected $parentRemoteId;
    protected $hierarchyLevel;

    /**
     * The title of the marketing activity.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Specifies the [Urchin Traffic Module (UTM) parameters](https://en.wikipedia.org/wiki/UTM_parameters) that are associated with a related marketing campaign. Either the URL parameter value or UTM can be set, but not both.
     */
    public function setUtm(ShopifyUTMInputInputObject $shopifyUTMInputInputObject): static
    {
        $this->utm = $shopifyUTMInputInputObject;

        return $this;
    }

    /**
     * Value for a query parameter that gets inserted into storefront URLs for matching storefront traffic to this activity. This feature is currently available on a limited basis to some partners only. UTMs should continue to be used for most partners. Both the URL parameter value and UTM parameters can be set.
     */
    public function setUrlParameterValue($urlParameterValue): static
    {
        $this->urlParameterValue = $urlParameterValue;

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
     * A custom unique identifier for the marketing activity, which can be used to manage the activity and send engagement metrics without having to store our marketing activity ID in your systems.
     */
    public function setRemoteId($remoteId): static
    {
        $this->remoteId = $remoteId;

        return $this;
    }

    /**
     * The status of the marketing activity. If status isn't set it will default to UNDEFINED.
     */
    public function setStatus($shopifyMarketingActivityExternalStatus): static
    {
        $this->status = new RawObject($shopifyMarketingActivityExternalStatus);

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
     * The unique string identifier of the channel to which this activity belongs. For the correct handle for your channel, contact your partner manager.
     */
    public function setChannelHandle($channelHandle): static
    {
        $this->channelHandle = $channelHandle;

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
     * The date and time at which the activity started. If omitted or set to `null`, the current time will be used.
     */
    public function setStart($start): static
    {
        $this->start = $start;

        return $this;
    }

    /**
     * The date and time at which the activity ended. If omitted or set to `null`, the current time will be used if the status is set to `INACTIVE` or `DELETED_EXTERNALLY`.
     */
    public function setEnd($end): static
    {
        $this->end = $end;

        return $this;
    }

    /**
     * The ID for the parent marketing activity, if creating hierarchical activities.
     */
    public function setParentActivityId($parentActivityId): static
    {
        $this->parentActivityId = $parentActivityId;

        return $this;
    }

    /**
     * The remote ID for the parent marketing activity, if creating hierarchical activities.
     */
    public function setParentRemoteId($parentRemoteId): static
    {
        $this->parentRemoteId = $parentRemoteId;

        return $this;
    }

    /**
     * The hierarchy level of the activity within a campaign. The hierarchy level can't be updated.
     */
    public function setHierarchyLevel($shopifyMarketingActivityHierarchyLevel): static
    {
        $this->hierarchyLevel = new RawObject($shopifyMarketingActivityHierarchyLevel);

        return $this;
    }
}
