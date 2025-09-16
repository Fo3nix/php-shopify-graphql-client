<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\App;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketingActivityExtensionAppErrors;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketingBudget;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketingEvent;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\UTMParameters;

class MarketingActivity
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
     * @return string
     */
    public function getActivityListUrl()
    {
        return $this->activityListUrl;
    }

    
    /**
     * @return MoneyV2
     */
    public function getAdSpend()
    {
        return $this->adSpend;
    }

    
    /**
     * @return App
     */
    public function getApp()
    {
        return $this->app;
    }

    
    /**
     * @return MarketingActivityExtensionAppErrors
     */
    public function getAppErrors()
    {
        return $this->appErrors;
    }

    
    /**
     * @return MarketingBudget
     */
    public function getBudget()
    {
        return $this->budget;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return string
     */
    public function getFormData()
    {
        return $this->formData;
    }

    
    /**
     * @return MarketingActivityHierarchyLevelEnumObject
     */
    public function getHierarchyLevel()
    {
        return $this->hierarchyLevel;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return bool
     */
    public function getInMainWorkflowVersion()
    {
        return $this->inMainWorkflowVersion;
    }

    
    /**
     * @return bool
     */
    public function getIsExternal()
    {
        return $this->isExternal;
    }

    
    /**
     * @return MarketingChannelEnumObject
     */
    public function getMarketingChannel()
    {
        return $this->marketingChannel;
    }

    
    /**
     * @return MarketingChannelEnumObject
     */
    public function getMarketingChannelType()
    {
        return $this->marketingChannelType;
    }

    
    /**
     * @return MarketingEvent
     */
    public function getMarketingEvent()
    {
        return $this->marketingEvent;
    }

    
    /**
     * @return string
     */
    public function getParentActivityId()
    {
        return $this->parentActivityId;
    }

    
    /**
     * @return string
     */
    public function getParentRemoteId()
    {
        return $this->parentRemoteId;
    }

    
    /**
     * @return string
     */
    public function getSourceAndMedium()
    {
        return $this->sourceAndMedium;
    }

    
    /**
     * @return MarketingActivityStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return MarketingActivityStatusBadgeTypeEnumObject
     */
    public function getStatusBadgeType()
    {
        return $this->statusBadgeType;
    }

    
    /**
     * @return BadgeTypeEnumObject
     */
    public function getStatusBadgeTypeV2()
    {
        return $this->statusBadgeTypeV2;
    }

    
    /**
     * @return string
     */
    public function getStatusLabel()
    {
        return $this->statusLabel;
    }

    
    /**
     * @return Carbon
     */
    public function getStatusTransitionedAt()
    {
        return $this->statusTransitionedAt;
    }

    
    /**
     * @return MarketingTacticEnumObject
     */
    public function getTactic()
    {
        return $this->tactic;
    }

    
    /**
     * @return MarketingActivityStatusEnumObject
     */
    public function getTargetStatus()
    {
        return $this->targetStatus;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    
    /**
     * @return string
     */
    public function getUrlParameterValue()
    {
        return $this->urlParameterValue;
    }

    
    /**
     * @return UTMParameters
     */
    public function getUtmParameters()
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
                $instance->adSpend = MoneyV2::fromArray($data['adSpend']);
            }
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = App::fromArray($data['app']);
            }
            if (isset($data['appErrors']) && $data['appErrors'] !== null) {
                $instance->appErrors = MarketingActivityExtensionAppErrors::fromArray($data['appErrors']);
            }
            if (isset($data['budget']) && $data['budget'] !== null) {
                $instance->budget = MarketingBudget::fromArray($data['budget']);
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
                $instance->marketingEvent = MarketingEvent::fromArray($data['marketingEvent']);
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
                $instance->utmParameters = UTMParameters::fromArray($data['utmParameters']);
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
