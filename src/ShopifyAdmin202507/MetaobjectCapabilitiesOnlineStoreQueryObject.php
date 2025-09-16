<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectCapabilitiesOnlineStoreQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilitiesOnlineStore";

    public function selectData(MetaobjectCapabilitiesOnlineStoreDataArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectCapabilityDefinitionDataOnlineStoreQueryObject("data");
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
