<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPurchasingCompanyQueryObject extends QueryObject
{
    const OBJECT_NAME = "PurchasingCompany";

    public function selectCompany(ShopifyPurchasingCompanyCompanyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyQueryObject("company");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContact(ShopifyPurchasingCompanyContactArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactQueryObject("contact");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocation(ShopifyPurchasingCompanyLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
