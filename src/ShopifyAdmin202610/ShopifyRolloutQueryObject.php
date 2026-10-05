<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRolloutQueryObject extends QueryObject
{
    const OBJECT_NAME = "Rollout";

    public function selectArchivedAt()
    {
        $this->selectField("archivedAt");

        return $this;
    }

    public function selectConcludedAt()
    {
        $this->selectField("concludedAt");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectEffectiveTrafficAllocation()
    {
        $this->selectField("effectiveTrafficAllocation");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectSchedule(ShopifyRolloutScheduleArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRolloutScheduleQueryObject("schedule");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStartedAt()
    {
        $this->selectField("startedAt");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectTrafficAllocation()
    {
        $this->selectField("trafficAllocation");

        return $this;
    }

    public function selectTreatments(ShopifyRolloutTreatmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRolloutTreatmentQueryObject("treatments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
