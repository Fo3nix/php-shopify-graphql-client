<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentHoldQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentHold";

    public function selectDisplayReason()
    {
        $this->selectField("displayReason");

        return $this;
    }

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }

    public function selectHeldByApp(FulfillmentHoldHeldByAppArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("heldByApp");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHeldByRequestingApp()
    {
        $this->selectField("heldByRequestingApp");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectReason()
    {
        $this->selectField("reason");

        return $this;
    }

    public function selectReasonNotes()
    {
        $this->selectField("reasonNotes");

        return $this;
    }
}
