<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyLocationsConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationsCondition";

    public function selectApplicationLevel()
    {
        $this->selectField("applicationLevel");

        return $this;
    }

    public function selectCompanyLocations(ShopifyCompanyLocationsConditionCompanyLocationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationConnectionQueryObject("companyLocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
