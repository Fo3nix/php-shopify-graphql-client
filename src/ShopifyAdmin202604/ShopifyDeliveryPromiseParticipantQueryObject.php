<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryPromiseParticipantQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryPromiseParticipant";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectOwner(ShopifyDeliveryPromiseParticipantOwnerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryPromiseParticipantOwnerUnionObject("owner");
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
