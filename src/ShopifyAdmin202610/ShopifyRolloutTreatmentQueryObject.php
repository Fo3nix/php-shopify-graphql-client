<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRolloutTreatmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "RolloutTreatment";

    public function selectChanges(ShopifyRolloutTreatmentChangesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRolloutChangeConnectionQueryObject("changes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectRollout(ShopifyRolloutTreatmentRolloutArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRolloutQueryObject("rollout");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSplit()
    {
        $this->selectField("split");

        return $this;
    }
}
