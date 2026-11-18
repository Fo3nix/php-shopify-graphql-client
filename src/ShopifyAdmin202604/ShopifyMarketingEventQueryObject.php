<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents actions that market a merchant's store or products.
 */
class ShopifyMarketingEventQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingEvent";

    /**
     * The app that the marketing event is attributed to.
     */
    public function selectApp(?ShopifyMarketingEventAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The medium through which the marketing activity and event reached consumers. This is used for reporting aggregation.
     *
     * @deprecated Use `marketingChannelType` instead.
     */
    public function selectChannel(): static
    {
        $this->selectField("channel");

        return $this;
    }

    /**
     * The unique string identifier of the channel to which this activity belongs. For the correct handle for your channel, contact your partner manager.
     */
    public function selectChannelHandle(): static
    {
        $this->selectField("channelHandle");

        return $this;
    }

    /**
     * A human-readable description of the marketing event.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The date and time when the marketing event ended.
     */
    public function selectEndedAt(): static
    {
        $this->selectField("endedAt");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    /**
     * The URL where the marketing event can be managed.
     */
    public function selectManageUrl(): static
    {
        $this->selectField("manageUrl");

        return $this;
    }

    /**
     * The medium through which the marketing activity and event reached consumers. This is used for reporting aggregation.
     */
    public function selectMarketingChannelType(): static
    {
        $this->selectField("marketingChannelType");

        return $this;
    }

    /**
     * The URL where the marketing event can be previewed.
     */
    public function selectPreviewUrl(): static
    {
        $this->selectField("previewUrl");

        return $this;
    }

    /**
     * An optional ID that helps Shopify validate engagement data.
     */
    public function selectRemoteId(): static
    {
        $this->selectField("remoteId");

        return $this;
    }

    /**
     * The date and time when the marketing event is scheduled to end.
     */
    public function selectScheduledToEndAt(): static
    {
        $this->selectField("scheduledToEndAt");

        return $this;
    }

    /**
     * Where the `MarketingEvent` occurred and what kind of content was used.
     * Because `utmSource` and `utmMedium` are often used interchangeably, this is
     * based on a combination of `marketingChannel`, `referringDomain`, and `type` to
     * provide a consistent representation for any given piece of marketing
     * regardless of the app that created it.
     */
    public function selectSourceAndMedium(): static
    {
        $this->selectField("sourceAndMedium");

        return $this;
    }

    /**
     * The date and time when the marketing event started.
     */
    public function selectStartedAt(): static
    {
        $this->selectField("startedAt");

        return $this;
    }

    /**
     * The display text for the marketing event type.
     *
     * @deprecated Use `sourceAndMedium` instead.
     */
    public function selectTargetTypeDisplayText(): static
    {
        $this->selectField("targetTypeDisplayText");

        return $this;
    }

    /**
     * The marketing event type.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * The name of the marketing campaign.
     */
    public function selectUtmCampaign(): static
    {
        $this->selectField("utmCampaign");

        return $this;
    }

    /**
     * The medium that the marketing campaign is using. Example values: `cpc`, `banner`.
     */
    public function selectUtmMedium(): static
    {
        $this->selectField("utmMedium");

        return $this;
    }

    /**
     * The referrer of the marketing event. Example values: `google`, `newsletter`.
     */
    public function selectUtmSource(): static
    {
        $this->selectField("utmSource");

        return $this;
    }
}
