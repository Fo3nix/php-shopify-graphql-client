<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The CompanyContactRoleAssignment describes the company and location associated to a company contact's role.
 */
class ShopifyCompanyContactRoleAssignmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRoleAssignment";

    /**
     * The company this role assignment belongs to.
     */
    public function selectCompany(?ShopifyCompanyContactRoleAssignmentCompanyArgumentsObject $argsObject = null): ShopifyCompanyQueryObject
    {
        $object = new ShopifyCompanyQueryObject("company");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The company contact for whom this role is assigned.
     */
    public function selectCompanyContact(?ShopifyCompanyContactRoleAssignmentCompanyContactArgumentsObject $argsObject = null): ShopifyCompanyContactQueryObject
    {
        $object = new ShopifyCompanyContactQueryObject("companyContact");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The company location to which the role is assigned.
     */
    public function selectCompanyLocation(?ShopifyCompanyContactRoleAssignmentCompanyLocationArgumentsObject $argsObject = null): ShopifyCompanyLocationQueryObject
    {
        $object = new ShopifyCompanyLocationQueryObject("companyLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the assignment record was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The role that's assigned to the company contact.
     */
    public function selectRole(?ShopifyCompanyContactRoleAssignmentRoleArgumentsObject $argsObject = null): ShopifyCompanyContactRoleQueryObject
    {
        $object = new ShopifyCompanyContactRoleQueryObject("role");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the assignment record was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
