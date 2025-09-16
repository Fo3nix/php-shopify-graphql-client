<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryPromiseParticipantQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryPromiseParticipant";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectOwner(DeliveryPromiseParticipantOwnerArgumentsObject $argsObject = null)
    {
        $object = new DeliveryPromiseParticipantOwnerUnionObject("owner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOwnerType()
    {
        $this->selectField("ownerType");

        return $this;
    }
}
