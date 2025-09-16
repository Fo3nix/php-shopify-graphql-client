<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OnlineStoreQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStore";

    public function selectPasswordProtection(OnlineStorePasswordProtectionArgumentsObject $argsObject = null)
    {
        $object = new OnlineStorePasswordProtectionQueryObject("passwordProtection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
