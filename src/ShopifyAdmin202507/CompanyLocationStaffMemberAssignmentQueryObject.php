<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CompanyLocationStaffMemberAssignmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationStaffMemberAssignment";

    public function selectCompanyLocation(CompanyLocationStaffMemberAssignmentCompanyLocationArgumentsObject $argsObject = null)
    {
        $object = new CompanyLocationQueryObject("companyLocation");
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

    public function selectStaffMember(CompanyLocationStaffMemberAssignmentStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
