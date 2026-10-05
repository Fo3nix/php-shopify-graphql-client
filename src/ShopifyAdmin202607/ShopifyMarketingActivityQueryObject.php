<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketingActivityQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivity";

    public function selectActivityListUrl()
    {
        $this->selectField("activityListUrl");

        return $this;
    }

    public function selectAdSpend(ShopifyMarketingActivityAdSpendArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("adSpend");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectApp(ShopifyMarketingActivityAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppErrors(ShopifyMarketingActivityAppErrorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketingActivityExtensionAppErrorsQueryObject("appErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBudget(ShopifyMarketingActivityBudgetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketingBudgetQueryObject("budget");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectFormData()
    {
        $this->selectField("formData");

        return $this;
    }

    public function selectHierarchyLevel()
    {
        $this->selectField("hierarchyLevel");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInMainWorkflowVersion()
    {
        $this->selectField("inMainWorkflowVersion");

        return $this;
    }

    public function selectIsExternal()
    {
        $this->selectField("isExternal");

        return $this;
    }

    /**
     * @deprecated Use `marketingChannelType` instead.
     */
    public function selectMarketingChannel()
    {
        $this->selectField("marketingChannel");

        return $this;
    }

    public function selectMarketingChannelType()
    {
        $this->selectField("marketingChannelType");

        return $this;
    }

    public function selectMarketingEvent(ShopifyMarketingActivityMarketingEventArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketingEventQueryObject("marketingEvent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectParentActivityId()
    {
        $this->selectField("parentActivityId");

        return $this;
    }

    public function selectParentRemoteId()
    {
        $this->selectField("parentRemoteId");

        return $this;
    }

    public function selectSourceAndMedium()
    {
        $this->selectField("sourceAndMedium");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * @deprecated Use `statusBadgeTypeV2` instead.
     */
    public function selectStatusBadgeType()
    {
        $this->selectField("statusBadgeType");

        return $this;
    }

    public function selectStatusBadgeTypeV2()
    {
        $this->selectField("statusBadgeTypeV2");

        return $this;
    }

    public function selectStatusLabel()
    {
        $this->selectField("statusLabel");

        return $this;
    }

    public function selectStatusTransitionedAt()
    {
        $this->selectField("statusTransitionedAt");

        return $this;
    }

    public function selectTactic()
    {
        $this->selectField("tactic");

        return $this;
    }

    public function selectTargetStatus()
    {
        $this->selectField("targetStatus");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }

    public function selectUrlParameterValue()
    {
        $this->selectField("urlParameterValue");

        return $this;
    }

    public function selectUtmParameters(ShopifyMarketingActivityUtmParametersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyUTMParametersQueryObject("utmParameters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
