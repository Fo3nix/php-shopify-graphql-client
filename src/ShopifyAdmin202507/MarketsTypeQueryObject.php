<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketsTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsType";

    public function selectB2b(MarketsTypeB2bArgumentsObject $argsObject = null)
    {
        $object = new MarketsB2BEntitlementQueryObject("b2b");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRegions(MarketsTypeRegionsArgumentsObject $argsObject = null)
    {
        $object = new MarketsRegionsEntitlementQueryObject("regions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRetail(MarketsTypeRetailArgumentsObject $argsObject = null)
    {
        $object = new MarketsRetailEntitlementQueryObject("retail");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectThemes(MarketsTypeThemesArgumentsObject $argsObject = null)
    {
        $object = new MarketsThemesEntitlementQueryObject("themes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
