<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\App;
use Carbon\Carbon;

class MarketingEvent
{
    protected $app;
    protected $channel;
    protected $channelHandle;
    protected $description;
    protected $endedAt;
    protected $id;
    protected $legacyResourceId;
    protected $manageUrl;
    protected $marketingChannelType;
    protected $previewUrl;
    protected $remoteId;
    protected $scheduledToEndAt;
    protected $sourceAndMedium;
    protected $startedAt;
    protected $targetTypeDisplayText;
    protected $type;
    protected $utmCampaign;
    protected $utmMedium;
    protected $utmSource;

    
    /**
     * @return App
     */
    public function getApp()
    {
        return $this->app;
    }

    
    /**
     * @return MarketingChannelEnumObject
     */
    public function getChannel()
    {
        return $this->channel;
    }

    
    /**
     * @return string
     */
    public function getChannelHandle()
    {
        return $this->channelHandle;
    }

    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    
    /**
     * @return Carbon
     */
    public function getEndedAt()
    {
        return $this->endedAt;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
    }

    
    /**
     * @return string
     */
    public function getManageUrl()
    {
        return $this->manageUrl;
    }

    
    /**
     * @return MarketingChannelEnumObject
     */
    public function getMarketingChannelType()
    {
        return $this->marketingChannelType;
    }

    
    /**
     * @return string
     */
    public function getPreviewUrl()
    {
        return $this->previewUrl;
    }

    
    /**
     * @return string
     */
    public function getRemoteId()
    {
        return $this->remoteId;
    }

    
    /**
     * @return Carbon
     */
    public function getScheduledToEndAt()
    {
        return $this->scheduledToEndAt;
    }

    
    /**
     * @return string
     */
    public function getSourceAndMedium()
    {
        return $this->sourceAndMedium;
    }

    
    /**
     * @return Carbon
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    
    /**
     * @return string
     */
    public function getTargetTypeDisplayText()
    {
        return $this->targetTypeDisplayText;
    }

    
    /**
     * @return MarketingTacticEnumObject
     */
    public function getType()
    {
        return $this->type;
    }

    
    /**
     * @return string
     */
    public function getUtmCampaign()
    {
        return $this->utmCampaign;
    }

    
    /**
     * @return string
     */
    public function getUtmMedium()
    {
        return $this->utmMedium;
    }

    
    /**
     * @return string
     */
    public function getUtmSource()
    {
        return $this->utmSource;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = App::fromArray($data['app']);
            }
            if (isset($data['channel']) && $data['channel'] !== null) {
                $instance->channel = $data['channel'];
            }
            if (isset($data['channelHandle']) && $data['channelHandle'] !== null) {
                $instance->channelHandle = $data['channelHandle'];
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['endedAt']) && $data['endedAt'] !== null) {
                $instance->endedAt = new Carbon($data['endedAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['manageUrl']) && $data['manageUrl'] !== null) {
                $instance->manageUrl = $data['manageUrl'];
            }
            if (isset($data['marketingChannelType']) && $data['marketingChannelType'] !== null) {
                $instance->marketingChannelType = $data['marketingChannelType'];
            }
            if (isset($data['previewUrl']) && $data['previewUrl'] !== null) {
                $instance->previewUrl = $data['previewUrl'];
            }
            if (isset($data['remoteId']) && $data['remoteId'] !== null) {
                $instance->remoteId = $data['remoteId'];
            }
            if (isset($data['scheduledToEndAt']) && $data['scheduledToEndAt'] !== null) {
                $instance->scheduledToEndAt = new Carbon($data['scheduledToEndAt']);
            }
            if (isset($data['sourceAndMedium']) && $data['sourceAndMedium'] !== null) {
                $instance->sourceAndMedium = $data['sourceAndMedium'];
            }
            if (isset($data['startedAt']) && $data['startedAt'] !== null) {
                $instance->startedAt = new Carbon($data['startedAt']);
            }
            if (isset($data['targetTypeDisplayText']) && $data['targetTypeDisplayText'] !== null) {
                $instance->targetTypeDisplayText = $data['targetTypeDisplayText'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
            }
            if (isset($data['utmCampaign']) && $data['utmCampaign'] !== null) {
                $instance->utmCampaign = $data['utmCampaign'];
            }
            if (isset($data['utmMedium']) && $data['utmMedium'] !== null) {
                $instance->utmMedium = $data['utmMedium'];
            }
            if (isset($data['utmSource']) && $data['utmSource'] !== null) {
                $instance->utmSource = $data['utmSource'];
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
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->channel !== null) {
                $data['channel'] = $this->channel;
            }
            if ($this->channelHandle !== null) {
                $data['channelHandle'] = $this->channelHandle;
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->endedAt !== null) {
                $data['endedAt'] = $this->endedAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->manageUrl !== null) {
                $data['manageUrl'] = $this->manageUrl;
            }
            if ($this->marketingChannelType !== null) {
                $data['marketingChannelType'] = $this->marketingChannelType;
            }
            if ($this->previewUrl !== null) {
                $data['previewUrl'] = $this->previewUrl;
            }
            if ($this->remoteId !== null) {
                $data['remoteId'] = $this->remoteId;
            }
            if ($this->scheduledToEndAt !== null) {
                $data['scheduledToEndAt'] = $this->scheduledToEndAt->toIso8601String();
            }
            if ($this->sourceAndMedium !== null) {
                $data['sourceAndMedium'] = $this->sourceAndMedium;
            }
            if ($this->startedAt !== null) {
                $data['startedAt'] = $this->startedAt->toIso8601String();
            }
            if ($this->targetTypeDisplayText !== null) {
                $data['targetTypeDisplayText'] = $this->targetTypeDisplayText;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->utmCampaign !== null) {
                $data['utmCampaign'] = $this->utmCampaign;
            }
            if ($this->utmMedium !== null) {
                $data['utmMedium'] = $this->utmMedium;
            }
            if ($this->utmSource !== null) {
                $data['utmSource'] = $this->utmSource;
            }
            return $data;
        }
}
