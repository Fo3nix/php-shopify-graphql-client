<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CompanyLocationsConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationsCondition";

    public function selectApplicationLevel()
    {
        $this->selectField("applicationLevel");

        return $this;
    }

    public function selectCompanyLocations(CompanyLocationsConditionCompanyLocationsArgumentsObject $argsObject = null)
    {
        $object = new CompanyLocationConnectionQueryObject("companyLocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
