<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMarketingActivityExtensionAppErrors;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMarketingBudget;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMarketingEvent;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUTMParameters;

/**
 * The marketing activity resource represents marketing that a
 *         merchant created through an app.
 */
class ShopifyMarketingActivity implements ShopifyNode
{
    protected $activityListUrl;
    protected $adSpend;
    protected $app;
    protected $appErrors;
    protected $budget;
    protected $createdAt;
    protected $formData;
    protected $hierarchyLevel;
    protected $id;
    protected $inMainWorkflowVersion;
    protected $isExternal;
    protected $marketingChannel;
    protected $marketingChannelType;
    protected $marketingEvent;
    protected $parentActivityId;
    protected $parentRemoteId;
    protected $sourceAndMedium;
    protected $status;
    protected $statusBadgeType;
    protected $statusBadgeTypeV2;
    protected $statusLabel;
    protected $statusTransitionedAt;
    protected $tactic;
    protected $targetStatus;
    protected $title;
    protected $updatedAt;
    protected $urlParameterValue;
    protected $utmParameters;

    
    /**
     * The URL of the marketing activity listing page in the marketing section.
     *
     * @return string
     */
    public function getActivityListUrl(): mixed
    {
        return $this->activityListUrl;
    }

    
    /**
     * The amount spent on the marketing activity.
     *
     * @return ShopifyMoneyV2
     */
    public function getAdSpend(): ?ShopifyMoneyV2
    {
        return $this->adSpend;
    }

    
    /**
     * The app which created this marketing activity.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
    }

    
    /**
     * The errors generated when an app publishes the marketing activity.
     *
     * @return ShopifyMarketingActivityExtensionAppErrors
     */
    public function getAppErrors(): ?ShopifyMarketingActivityExtensionAppErrors
    {
        return $this->appErrors;
    }

    
    /**
     * The allocated budget for the marketing activity.
     *
     * @return ShopifyMarketingBudget
     */
    public function getBudget(): ?ShopifyMarketingBudget
    {
        return $this->budget;
    }

    
    /**
     * The date and time when the marketing activity was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The completed content in the marketing activity creation form.
     *
     * @return string
     */
    public function getFormData(): ?string
    {
        return $this->formData;
    }

    
    /**
     * The hierarchy level of the marketing activity.
     *
     * @return string A ShopifyMarketingActivityHierarchyLevelEnumObject value
     */
    public function getHierarchyLevel(): ?string
    {
        return $this->hierarchyLevel;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Whether the marketing activity is in the main workflow version of the marketing automation.
     *
     * @return bool
     */
    public function getInMainWorkflowVersion(): ?bool
    {
        return $this->inMainWorkflowVersion;
    }

    
    /**
     * The marketing activity represents an external marketing activity.
     *
     * @return bool
     */
    public function getIsExternal(): ?bool
    {
        return $this->isExternal;
    }

    
    /**
     * The medium through which the marketing activity and event reached consumers. This is used for reporting aggregation.
     *
     * @return string A ShopifyMarketingChannelEnumObject value
     */
    public function getMarketingChannel(): ?string
    {
        return $this->marketingChannel;
    }

    
    /**
     * The medium through which the marketing activity and event reached consumers. This is used for reporting aggregation.
     *
     * @return string A ShopifyMarketingChannelEnumObject value
     */
    public function getMarketingChannelType(): ?string
    {
        return $this->marketingChannelType;
    }

    
    /**
     * Associated marketing event of this marketing activity.
     *
     * @return ShopifyMarketingEvent
     */
    public function getMarketingEvent(): ?ShopifyMarketingEvent
    {
        return $this->marketingEvent;
    }

    
    /**
     * ID of the parent activity of this marketing activity.
     *
     * @return string
     */
    public function getParentActivityId(): ?string
    {
        return $this->parentActivityId;
    }

    
    /**
     * ID of the parent activity of this marketing activity.
     *
     * @return string
     */
    public function getParentRemoteId(): ?string
    {
        return $this->parentRemoteId;
    }

    
    /**
     * A contextual description of the marketing activity based on the platform and tactic used.
     *
     * @return string
     */
    public function getSourceAndMedium(): ?string
    {
        return $this->sourceAndMedium;
    }

    
    /**
     * The current state of the marketing activity.
     *
     * @return string A ShopifyMarketingActivityStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The severity of the marketing activity's status.
     *
     * @return string A ShopifyMarketingActivityStatusBadgeTypeEnumObject value
     */
    public function getStatusBadgeType(): ?string
    {
        return $this->statusBadgeType;
    }

    
    /**
     * The severity of the marketing activity's status.
     *
     * @return string A ShopifyBadgeTypeEnumObject value
     */
    public function getStatusBadgeTypeV2(): ?string
    {
        return $this->statusBadgeTypeV2;
    }

    
    /**
     * The rendered status of the marketing activity.
     *
     * @return string
     */
    public function getStatusLabel(): ?string
    {
        return $this->statusLabel;
    }

    
    /**
     * The [date and time](
     *           https://help.shopify.com/https://en.wikipedia.org/wiki/ISO_8601
     *           ) when the activity's status last changed.
     *
     * @return Carbon
     */
    public function getStatusTransitionedAt(): ?Carbon
    {
        return $this->statusTransitionedAt;
    }

    
    /**
     * The method of marketing used for this marketing activity.
     *
     * @return string A ShopifyMarketingTacticEnumObject value
     */
    public function getTactic(): ?string
    {
        return $this->tactic;
    }

    
    /**
     * The status to which the marketing activity is currently transitioning.
     *
     * @return string A ShopifyMarketingActivityStatusEnumObject value
     */
    public function getTargetStatus(): ?string
    {
        return $this->targetStatus;
    }

    
    /**
     * The marketing activity's title, which is rendered on the marketing listing page.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The date and time when the marketing activity was updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    
    /**
     * The value portion of the URL query parameter used in attributing sessions to this activity.
     *
     * @return string
     */
    public function getUrlParameterValue(): ?string
    {
        return $this->urlParameterValue;
    }

    
    /**
     * The set of [Urchin Tracking Module](
     *           https://help.shopify.com/https://en.wikipedia.org/wiki/UTM_parameters
     *           ) used in the URL for tracking this marketing activity.
     *
     * @return ShopifyUTMParameters
     */
    public function getUtmParameters(): ?ShopifyUTMParameters
    {
        return $this->utmParameters;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['activityListUrl']) && $data['activityListUrl'] !== null) {
                $instance->activityListUrl = $data['activityListUrl'];
            }
            if (isset($data['adSpend']) && $data['adSpend'] !== null) {
                $instance->adSpend = ShopifyMoneyV2::fromArray($data['adSpend']);
            }
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyApp::fromArray($data['app']);
            }
            if (isset($data['appErrors']) && $data['appErrors'] !== null) {
                $instance->appErrors = ShopifyMarketingActivityExtensionAppErrors::fromArray($data['appErrors']);
            }
            if (isset($data['budget']) && $data['budget'] !== null) {
                $instance->budget = ShopifyMarketingBudget::fromArray($data['budget']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['formData']) && $data['formData'] !== null) {
                $instance->formData = $data['formData'];
            }
            if (isset($data['hierarchyLevel']) && $data['hierarchyLevel'] !== null) {
                $instance->hierarchyLevel = $data['hierarchyLevel'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inMainWorkflowVersion']) && $data['inMainWorkflowVersion'] !== null) {
                $instance->inMainWorkflowVersion = $data['inMainWorkflowVersion'];
            }
            if (isset($data['isExternal']) && $data['isExternal'] !== null) {
                $instance->isExternal = $data['isExternal'];
            }
            if (isset($data['marketingChannel']) && $data['marketingChannel'] !== null) {
                $instance->marketingChannel = $data['marketingChannel'];
            }
            if (isset($data['marketingChannelType']) && $data['marketingChannelType'] !== null) {
                $instance->marketingChannelType = $data['marketingChannelType'];
            }
            if (isset($data['marketingEvent']) && $data['marketingEvent'] !== null) {
                $instance->marketingEvent = ShopifyMarketingEvent::fromArray($data['marketingEvent']);
            }
            if (isset($data['parentActivityId']) && $data['parentActivityId'] !== null) {
                $instance->parentActivityId = $data['parentActivityId'];
            }
            if (isset($data['parentRemoteId']) && $data['parentRemoteId'] !== null) {
                $instance->parentRemoteId = $data['parentRemoteId'];
            }
            if (isset($data['sourceAndMedium']) && $data['sourceAndMedium'] !== null) {
                $instance->sourceAndMedium = $data['sourceAndMedium'];
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['statusBadgeType']) && $data['statusBadgeType'] !== null) {
                $instance->statusBadgeType = $data['statusBadgeType'];
            }
            if (isset($data['statusBadgeTypeV2']) && $data['statusBadgeTypeV2'] !== null) {
                $instance->statusBadgeTypeV2 = $data['statusBadgeTypeV2'];
            }
            if (isset($data['statusLabel']) && $data['statusLabel'] !== null) {
                $instance->statusLabel = $data['statusLabel'];
            }
            if (isset($data['statusTransitionedAt']) && $data['statusTransitionedAt'] !== null) {
                $instance->statusTransitionedAt = new Carbon($data['statusTransitionedAt']);
            }
            if (isset($data['tactic']) && $data['tactic'] !== null) {
                $instance->tactic = $data['tactic'];
            }
            if (isset($data['targetStatus']) && $data['targetStatus'] !== null) {
                $instance->targetStatus = $data['targetStatus'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['urlParameterValue']) && $data['urlParameterValue'] !== null) {
                $instance->urlParameterValue = $data['urlParameterValue'];
            }
            if (isset($data['utmParameters']) && $data['utmParameters'] !== null) {
                $instance->utmParameters = ShopifyUTMParameters::fromArray($data['utmParameters']);
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
            if ($this->activityListUrl !== null) {
                $data['activityListUrl'] = $this->activityListUrl;
            }
            if ($this->adSpend !== null) {
                $data['adSpend'] = $this->adSpend->asArray();
            }
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->appErrors !== null) {
                $data['appErrors'] = $this->appErrors->asArray();
            }
            if ($this->budget !== null) {
                $data['budget'] = $this->budget->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->formData !== null) {
                $data['formData'] = $this->formData;
            }
            if ($this->hierarchyLevel !== null) {
                $data['hierarchyLevel'] = $this->hierarchyLevel;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->inMainWorkflowVersion !== null) {
                $data['inMainWorkflowVersion'] = $this->inMainWorkflowVersion;
            }
            if ($this->isExternal !== null) {
                $data['isExternal'] = $this->isExternal;
            }
            if ($this->marketingChannel !== null) {
                $data['marketingChannel'] = $this->marketingChannel;
            }
            if ($this->marketingChannelType !== null) {
                $data['marketingChannelType'] = $this->marketingChannelType;
            }
            if ($this->marketingEvent !== null) {
                $data['marketingEvent'] = $this->marketingEvent->asArray();
            }
            if ($this->parentActivityId !== null) {
                $data['parentActivityId'] = $this->parentActivityId;
            }
            if ($this->parentRemoteId !== null) {
                $data['parentRemoteId'] = $this->parentRemoteId;
            }
            if ($this->sourceAndMedium !== null) {
                $data['sourceAndMedium'] = $this->sourceAndMedium;
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->statusBadgeType !== null) {
                $data['statusBadgeType'] = $this->statusBadgeType;
            }
            if ($this->statusBadgeTypeV2 !== null) {
                $data['statusBadgeTypeV2'] = $this->statusBadgeTypeV2;
            }
            if ($this->statusLabel !== null) {
                $data['statusLabel'] = $this->statusLabel;
            }
            if ($this->statusTransitionedAt !== null) {
                $data['statusTransitionedAt'] = $this->statusTransitionedAt->toIso8601String();
            }
            if ($this->tactic !== null) {
                $data['tactic'] = $this->tactic;
            }
            if ($this->targetStatus !== null) {
                $data['targetStatus'] = $this->targetStatus;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->urlParameterValue !== null) {
                $data['urlParameterValue'] = $this->urlParameterValue;
            }
            if ($this->utmParameters !== null) {
                $data['utmParameters'] = $this->utmParameters->asArray();
            }
            return $data;
        }
}
