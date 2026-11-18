<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A rollout on a shop. Merchants use rollouts to run sales events, permanent launches, and A/B tests by serving treatments to a configured share of buyers.
 */
class ShopifyRolloutQueryObject extends QueryObject
{
    const OBJECT_NAME = "Rollout";

    /**
     * The date and time at which the rollout was archived.
     */
    public function selectArchivedAt(): static
    {
        $this->selectField("archivedAt");

        return $this;
    }

    /**
     * The actual conclusion date and time of the rollout for public API requests. Use `schedule.concludeAt` for the planned conclusion date.
     */
    public function selectConcludedAt(): static
    {
        $this->selectField("concludedAt");

        return $this;
    }

    /**
     * The date and time at which the rollout was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The calculated percentage of new buyer traffic allocated to this rollout after accounting for other active rollouts competing for the same traffic.
     */
    public function selectEffectiveTrafficAllocation(): static
    {
        $this->selectField("effectiveTrafficAllocation");

        return $this;
    }

    /**
     * The ID of the rollout.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The name of the rollout.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The rollout's planned activation and conclusion dates. Returns null when neither date is set.
     */
    public function selectSchedule(?ShopifyRolloutScheduleArgumentsObject $argsObject = null): ShopifyRolloutScheduleQueryObject
    {
        $object = new ShopifyRolloutScheduleQueryObject("schedule");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The actual start date and time of the rollout for public API requests. Use `schedule.activateAt` for the planned activation date.
     */
    public function selectStartedAt(): static
    {
        $this->selectField("startedAt");

        return $this;
    }

    /**
     * The status of the rollout.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The percentage of buyer traffic that the rollout is configured to receive, as an integer from 0 to 100. This is the configured allocation before other active rollouts competing for the same traffic are taken into account, so it isn't the share of buyers that a treatment reaches.
     */
    public function selectTrafficAllocation(): static
    {
        $this->selectField("trafficAllocation");

        return $this;
    }

    /**
     * The treatments of the rollout. Control treatments are included even when they have no changes.
     */
    public function selectTreatments(?ShopifyRolloutTreatmentsArgumentsObject $argsObject = null): ShopifyRolloutTreatmentQueryObject
    {
        $object = new ShopifyRolloutTreatmentQueryObject("treatments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time at which the rollout was last edited. This timestamp doesn't necessarily change when another rollout changes this rollout's effective traffic allocation.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
