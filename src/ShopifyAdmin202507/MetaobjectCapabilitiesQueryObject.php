<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectCapabilitiesQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilities";

    public function selectOnlineStore(MetaobjectCapabilitiesOnlineStoreArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectCapabilitiesOnlineStoreQueryObject("onlineStore");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublishable(MetaobjectCapabilitiesPublishableArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectCapabilitiesPublishableQueryObject("publishable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRenderable(MetaobjectCapabilitiesRenderableArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectCapabilitiesRenderableQueryObject("renderable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTranslatable(MetaobjectCapabilitiesTranslatableArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectCapabilitiesTranslatableQueryObject("translatable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
