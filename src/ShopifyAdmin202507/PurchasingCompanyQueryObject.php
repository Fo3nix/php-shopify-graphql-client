<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PurchasingCompanyQueryObject extends QueryObject
{
    const OBJECT_NAME = "PurchasingCompany";

    public function selectCompany(PurchasingCompanyCompanyArgumentsObject $argsObject = null)
    {
        $object = new CompanyQueryObject("company");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContact(PurchasingCompanyContactArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactQueryObject("contact");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocation(PurchasingCompanyLocationArgumentsObject $argsObject = null)
    {
        $object = new CompanyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
