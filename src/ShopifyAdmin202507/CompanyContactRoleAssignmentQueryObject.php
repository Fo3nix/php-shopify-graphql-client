<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CompanyContactRoleAssignmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRoleAssignment";

    public function selectCompany(CompanyContactRoleAssignmentCompanyArgumentsObject $argsObject = null)
    {
        $object = new CompanyQueryObject("company");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompanyContact(CompanyContactRoleAssignmentCompanyContactArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactQueryObject("companyContact");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompanyLocation(CompanyContactRoleAssignmentCompanyLocationArgumentsObject $argsObject = null)
    {
        $object = new CompanyLocationQueryObject("companyLocation");
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

    public function selectRole(CompanyContactRoleAssignmentRoleArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactRoleQueryObject("role");
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
