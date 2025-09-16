<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketingEventQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingEvent";

    public function selectApp(MarketingEventAppArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `marketingChannelType` instead.
     */
    public function selectChannel()
    {
        $this->selectField("channel");

        return $this;
    }

    public function selectChannelHandle()
    {
        $this->selectField("channelHandle");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectEndedAt()
    {
        $this->selectField("endedAt");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectManageUrl()
    {
        $this->selectField("manageUrl");

        return $this;
    }

    public function selectMarketingChannelType()
    {
        $this->selectField("marketingChannelType");

        return $this;
    }

    public function selectPreviewUrl()
    {
        $this->selectField("previewUrl");

        return $this;
    }

    public function selectRemoteId()
    {
        $this->selectField("remoteId");

        return $this;
    }

    public function selectScheduledToEndAt()
    {
        $this->selectField("scheduledToEndAt");

        return $this;
    }

    public function selectSourceAndMedium()
    {
        $this->selectField("sourceAndMedium");

        return $this;
    }

    public function selectStartedAt()
    {
        $this->selectField("startedAt");

        return $this;
    }

    /**
     * @deprecated Use `sourceAndMedium` instead.
     */
    public function selectTargetTypeDisplayText()
    {
        $this->selectField("targetTypeDisplayText");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectUtmCampaign()
    {
        $this->selectField("utmCampaign");

        return $this;
    }

    public function selectUtmMedium()
    {
        $this->selectField("utmMedium");

        return $this;
    }

    public function selectUtmSource()
    {
        $this->selectField("utmSource");

        return $this;
    }
}
