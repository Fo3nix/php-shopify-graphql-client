<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A representation of store's staff member who is assigned to a [company location](https://shopify.dev/api/admin-graphql/latest/objects/CompanyLocation) of the shop. The staff member's actions will be limited to objects associated with the assigned company location.
 */
class ShopifyCompanyLocationStaffMemberAssignmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationStaffMemberAssignment";

    /**
     * The company location the staff member is assigned to.
     */
    public function selectCompanyLocation(?ShopifyCompanyLocationStaffMemberAssignmentCompanyLocationArgumentsObject $argsObject = null): ShopifyCompanyLocationQueryObject
    {
        $object = new ShopifyCompanyLocationQueryObject("companyLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * Represents the data of a staff member who's assigned to a company location.
     */
    public function selectStaffMember(?ShopifyCompanyLocationStaffMemberAssignmentStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
