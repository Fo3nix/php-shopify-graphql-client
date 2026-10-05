<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyLocationStaffMemberAssignmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationStaffMemberAssignment";

    public function selectCompanyLocation(ShopifyCompanyLocationStaffMemberAssignmentCompanyLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationQueryObject("companyLocation");
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

    public function selectStaffMember(ShopifyCompanyLocationStaffMemberAssignmentStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
