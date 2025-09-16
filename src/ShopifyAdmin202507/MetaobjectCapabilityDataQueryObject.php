<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectCapabilityDataQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilityData";

    public function selectOnlineStore(MetaobjectCapabilityDataOnlineStoreArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectCapabilityDataOnlineStoreQueryObject("onlineStore");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublishable(MetaobjectCapabilityDataPublishableArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectCapabilityDataPublishableQueryObject("publishable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
