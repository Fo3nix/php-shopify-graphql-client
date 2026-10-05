<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyContactQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContact";

    public function selectCompany(ShopifyCompanyContactCompanyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyQueryObject("company");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectCustomer(ShopifyCompanyContactCustomerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrders(ShopifyCompanyContactDraftOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderConnectionQueryObject("draftOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectIsMainContact()
    {
        $this->selectField("isMainContact");

        return $this;
    }

    public function selectLifetimeDuration()
    {
        $this->selectField("lifetimeDuration");

        return $this;
    }

    public function selectLocale()
    {
        $this->selectField("locale");

        return $this;
    }

    public function selectOrders(ShopifyCompanyContactOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRoleAssignments(ShopifyCompanyContactRoleAssignmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactRoleAssignmentConnectionQueryObject("roleAssignments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
