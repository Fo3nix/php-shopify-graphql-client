<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A treatment in a rollout. Each treatment receives a share of the rollout's traffic and makes a set of changes to resources for the buyers it serves.
 */
class ShopifyRolloutTreatmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "RolloutTreatment";

    /**
     * The changes this treatment makes to resources while it's served. Changes retain their `id` and `__typename` if the affected resource is deleted or inaccessible. Use `query` to filter by exact public `type`, `discount_id`, `catalog_id`, `theme_id`, or `checkout_and_accounts_configuration_id` (numeric ID or quoted GID). Theme IDs match the publish target; checkout and accounts configuration IDs match either swap source or publish target. Each resource-ID filter matches only readable, available resources.
     */
    public function selectChanges(?ShopifyRolloutTreatmentChangesArgumentsObject $argsObject = null): ShopifyRolloutChangeConnectionQueryObject
    {
        $object = new ShopifyRolloutChangeConnectionQueryObject("changes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the rollout treatment.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The rollout this treatment belongs to.
     */
    public function selectRollout(?ShopifyRolloutTreatmentRolloutArgumentsObject $argsObject = null): ShopifyRolloutQueryObject
    {
        $object = new ShopifyRolloutQueryObject("rollout");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The percentage of the rollout's traffic, from 0 to 100, that this treatment is configured to receive. The splits of a rollout's treatments add up to 100.
     */
    public function selectSplit(): static
    {
        $this->selectField("split");

        return $this;
    }
}
