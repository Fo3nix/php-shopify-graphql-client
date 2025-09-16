<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class BusinessEntityQueryObject extends QueryObject
{
    const OBJECT_NAME = "BusinessEntity";

    public function selectAddress(BusinessEntityAddressArgumentsObject $argsObject = null)
    {
        $object = new BusinessEntityAddressQueryObject("address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectArchived()
    {
        $this->selectField("archived");

        return $this;
    }

    public function selectCompanyName()
    {
        $this->selectField("companyName");

        return $this;
    }

    public function selectDisplayName()
    {
        $this->selectField("displayName");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectPrimary()
    {
        $this->selectField("primary");

        return $this;
    }

    public function selectShopifyPaymentsAccount(BusinessEntityShopifyPaymentsAccountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsAccountQueryObject("shopifyPaymentsAccount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
