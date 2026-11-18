<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition checking the company location a visitor is purchasing for.
 */
class ShopifyCompanyLocationsConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationsCondition";

    /**
     * The application level for the condition.
     */
    public function selectApplicationLevel(): static
    {
        $this->selectField("applicationLevel");

        return $this;
    }

    /**
     * The company locations that comprise the market.
     */
    public function selectCompanyLocations(?ShopifyCompanyLocationsConditionCompanyLocationsArgumentsObject $argsObject = null): ShopifyCompanyLocationConnectionQueryObject
    {
        $object = new ShopifyCompanyLocationConnectionQueryObject("companyLocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
