<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The shop's online store channel.
 */
class ShopifyOnlineStoreQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStore";

    /**
     * Storefront password information.
     */
    public function selectPasswordProtection(?ShopifyOnlineStorePasswordProtectionArgumentsObject $argsObject = null): ShopifyOnlineStorePasswordProtectionQueryObject
    {
        $object = new ShopifyOnlineStorePasswordProtectionQueryObject("passwordProtection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
