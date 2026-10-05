<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyContactRoleAssignmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRoleAssignment";

    public function selectCompany(ShopifyCompanyContactRoleAssignmentCompanyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyQueryObject("company");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompanyContact(ShopifyCompanyContactRoleAssignmentCompanyContactArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactQueryObject("companyContact");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompanyLocation(ShopifyCompanyContactRoleAssignmentCompanyLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationQueryObject("companyLocation");
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

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectRole(ShopifyCompanyContactRoleAssignmentRoleArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactRoleQueryObject("role");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
