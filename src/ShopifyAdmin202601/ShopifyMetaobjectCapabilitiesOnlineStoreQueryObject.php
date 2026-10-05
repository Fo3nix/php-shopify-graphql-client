<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectCapabilitiesOnlineStoreQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilitiesOnlineStore";

    public function selectData(ShopifyMetaobjectCapabilitiesOnlineStoreDataArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectCapabilityDefinitionDataOnlineStoreQueryObject("data");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
