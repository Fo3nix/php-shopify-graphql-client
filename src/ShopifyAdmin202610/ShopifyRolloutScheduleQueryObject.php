<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The planned activation and optional conclusion dates of a rollout, not its actual lifecycle timestamps.
 */
class ShopifyRolloutScheduleQueryObject extends QueryObject
{
    const OBJECT_NAME = "RolloutSchedule";

    /**
     * The date and time at which the rollout is scheduled to activate.
     */
    public function selectActivateAt(): static
    {
        $this->selectField("activateAt");

        return $this;
    }

    /**
     * The date and time at which the rollout is scheduled to conclude, or null when no conclusion date is set.
     */
    public function selectConcludeAt(): static
    {
        $this->selectField("concludeAt");

        return $this;
    }
}
