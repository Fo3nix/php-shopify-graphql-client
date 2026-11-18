<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyApp;
use Carbon\Carbon;

/**
 * Represents actions that market a merchant's store or products.
 */
class ShopifyMarketingEvent implements ShopifyLegacyInteroperability, ShopifyNode
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
     * The app that the marketing event is attributed to.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
    }

    
    /**
     * The medium through which the marketing activity and event reached consumers. This is used for reporting aggregation.
     *
     * @return string A ShopifyMarketingChannelEnumObject value
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }

    
    /**
     * The unique string identifier of the channel to which this activity belongs. For the correct handle for your channel, contact your partner manager.
     *
     * @return string
     */
    public function getChannelHandle(): ?string
    {
        return $this->channelHandle;
    }

    
    /**
     * A human-readable description of the marketing event.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The date and time when the marketing event ended.
     *
     * @return Carbon
     */
    public function getEndedAt(): ?Carbon
    {
        return $this->endedAt;
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
     * The ID of the corresponding resource in the REST Admin API.
     *
     * @return string
     */
    public function getLegacyResourceId(): mixed
    {
        return $this->legacyResourceId;
    }

    
    /**
     * The URL where the marketing event can be managed.
     *
     * @return string
     */
    public function getManageUrl(): mixed
    {
        return $this->manageUrl;
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
     * The URL where the marketing event can be previewed.
     *
     * @return string
     */
    public function getPreviewUrl(): mixed
    {
        return $this->previewUrl;
    }

    
    /**
     * An optional ID that helps Shopify validate engagement data.
     *
     * @return string
     */
    public function getRemoteId(): ?string
    {
        return $this->remoteId;
    }

    
    /**
     * The date and time when the marketing event is scheduled to end.
     *
     * @return Carbon
     */
    public function getScheduledToEndAt(): ?Carbon
    {
        return $this->scheduledToEndAt;
    }

    
    /**
     * Where the `MarketingEvent` occurred and what kind of content was used.
     * Because `utmSource` and `utmMedium` are often used interchangeably, this is
     * based on a combination of `marketingChannel`, `referringDomain`, and `type` to
     * provide a consistent representation for any given piece of marketing
     * regardless of the app that created it.
     *
     * @return string
     */
    public function getSourceAndMedium(): ?string
    {
        return $this->sourceAndMedium;
    }

    
    /**
     * The date and time when the marketing event started.
     *
     * @return Carbon
     */
    public function getStartedAt(): ?Carbon
    {
        return $this->startedAt;
    }

    
    /**
     * The display text for the marketing event type.
     *
     * @return string
     */
    public function getTargetTypeDisplayText(): ?string
    {
        return $this->targetTypeDisplayText;
    }

    
    /**
     * The marketing event type.
     *
     * @return string A ShopifyMarketingTacticEnumObject value
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    
    /**
     * The name of the marketing campaign.
     *
     * @return string
     */
    public function getUtmCampaign(): ?string
    {
        return $this->utmCampaign;
    }

    
    /**
     * The medium that the marketing campaign is using. Example values: `cpc`, `banner`.
     *
     * @return string
     */
    public function getUtmMedium(): ?string
    {
        return $this->utmMedium;
    }

    
    /**
     * The referrer of the marketing event. Example values: `google`, `newsletter`.
     *
     * @return string
     */
    public function getUtmSource(): ?string
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
                $instance->app = ShopifyApp::fromArray($data['app']);
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
