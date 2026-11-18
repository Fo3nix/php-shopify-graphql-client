<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerSegmentMembersQueryCreate` mutation.
 */
class ShopifyCustomerSegmentMembersQueryCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSegmentMembersQueryCreatePayload";

    /**
     * The newly created customer segment members query.
     */
    public function selectCustomerSegmentMembersQuery(?ShopifyCustomerSegmentMembersQueryCreatePayloadCustomerSegmentMembersQueryArgumentsObject $argsObject = null): ShopifyCustomerSegmentMembersQueryQueryObject
    {
        $object = new ShopifyCustomerSegmentMembersQueryQueryObject("customerSegmentMembersQuery");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerSegmentMembersQueryCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCustomerSegmentMembersQueryUserErrorQueryObject
    {
        $object = new ShopifyCustomerSegmentMembersQueryUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
