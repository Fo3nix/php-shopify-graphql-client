<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The marketing activity resource represents marketing that a
 *         merchant created through an app.
 */
class ShopifyMarketingActivityQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivity";

    /**
     * The URL of the marketing activity listing page in the marketing section.
     */
    public function selectActivityListUrl(): static
    {
        $this->selectField("activityListUrl");

        return $this;
    }

    /**
     * The amount spent on the marketing activity.
     */
    public function selectAdSpend(?ShopifyMarketingActivityAdSpendArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("adSpend");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The app which created this marketing activity.
     */
    public function selectApp(?ShopifyMarketingActivityAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The errors generated when an app publishes the marketing activity.
     */
    public function selectAppErrors(?ShopifyMarketingActivityAppErrorsArgumentsObject $argsObject = null): ShopifyMarketingActivityExtensionAppErrorsQueryObject
    {
        $object = new ShopifyMarketingActivityExtensionAppErrorsQueryObject("appErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The allocated budget for the marketing activity.
     */
    public function selectBudget(?ShopifyMarketingActivityBudgetArgumentsObject $argsObject = null): ShopifyMarketingBudgetQueryObject
    {
        $object = new ShopifyMarketingBudgetQueryObject("budget");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the marketing activity was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The completed content in the marketing activity creation form.
     */
    public function selectFormData(): static
    {
        $this->selectField("formData");

        return $this;
    }

    /**
     * The hierarchy level of the marketing activity.
     */
    public function selectHierarchyLevel(): static
    {
        $this->selectField("hierarchyLevel");

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
     * Whether the marketing activity is in the main workflow version of the marketing automation.
     */
    public function selectInMainWorkflowVersion(): static
    {
        $this->selectField("inMainWorkflowVersion");

        return $this;
    }

    /**
     * The marketing activity represents an external marketing activity.
     */
    public function selectIsExternal(): static
    {
        $this->selectField("isExternal");

        return $this;
    }

    /**
     * The medium through which the marketing activity and event reached consumers. This is used for reporting aggregation.
     *
     * @deprecated Use `marketingChannelType` instead.
     */
    public function selectMarketingChannel(): static
    {
        $this->selectField("marketingChannel");

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
     * Associated marketing event of this marketing activity.
     */
    public function selectMarketingEvent(?ShopifyMarketingActivityMarketingEventArgumentsObject $argsObject = null): ShopifyMarketingEventQueryObject
    {
        $object = new ShopifyMarketingEventQueryObject("marketingEvent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * ID of the parent activity of this marketing activity.
     */
    public function selectParentActivityId(): static
    {
        $this->selectField("parentActivityId");

        return $this;
    }

    /**
     * ID of the parent activity of this marketing activity.
     */
    public function selectParentRemoteId(): static
    {
        $this->selectField("parentRemoteId");

        return $this;
    }

    /**
     * A contextual description of the marketing activity based on the platform and tactic used.
     */
    public function selectSourceAndMedium(): static
    {
        $this->selectField("sourceAndMedium");

        return $this;
    }

    /**
     * The current state of the marketing activity.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The severity of the marketing activity's status.
     *
     * @deprecated Use `statusBadgeTypeV2` instead.
     */
    public function selectStatusBadgeType(): static
    {
        $this->selectField("statusBadgeType");

        return $this;
    }

    /**
     * The severity of the marketing activity's status.
     */
    public function selectStatusBadgeTypeV2(): static
    {
        $this->selectField("statusBadgeTypeV2");

        return $this;
    }

    /**
     * The rendered status of the marketing activity.
     */
    public function selectStatusLabel(): static
    {
        $this->selectField("statusLabel");

        return $this;
    }

    /**
     * The [date and time](
     *           https://help.shopify.com/https://en.wikipedia.org/wiki/ISO_8601
     *           ) when the activity's status last changed.
     */
    public function selectStatusTransitionedAt(): static
    {
        $this->selectField("statusTransitionedAt");

        return $this;
    }

    /**
     * The method of marketing used for this marketing activity.
     */
    public function selectTactic(): static
    {
        $this->selectField("tactic");

        return $this;
    }

    /**
     * The status to which the marketing activity is currently transitioning.
     */
    public function selectTargetStatus(): static
    {
        $this->selectField("targetStatus");

        return $this;
    }

    /**
     * The marketing activity's title, which is rendered on the marketing listing page.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The date and time when the marketing activity was updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * The value portion of the URL query parameter used in attributing sessions to this activity.
     */
    public function selectUrlParameterValue(): static
    {
        $this->selectField("urlParameterValue");

        return $this;
    }

    /**
     * The set of [Urchin Tracking Module](
     *           https://help.shopify.com/https://en.wikipedia.org/wiki/UTM_parameters
     *           ) used in the URL for tracking this marketing activity.
     */
    public function selectUtmParameters(?ShopifyMarketingActivityUtmParametersArgumentsObject $argsObject = null): ShopifyUTMParametersQueryObject
    {
        $object = new ShopifyUTMParametersQueryObject("utmParameters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
