<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOnlineStoreQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStore";

    public function selectPasswordProtection(ShopifyOnlineStorePasswordProtectionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOnlineStorePasswordProtectionQueryObject("passwordProtection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
