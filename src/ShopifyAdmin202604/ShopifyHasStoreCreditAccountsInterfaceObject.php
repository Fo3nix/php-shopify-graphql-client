<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Represents information about the store credit accounts associated to the specified owner.
 */
class ShopifyHasStoreCreditAccountsInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "HasStoreCreditAccounts";

    /**
     * Returns a list of store credit accounts that belong to the owner resource.
     * A store credit account owner can hold multiple accounts each with a different currency.
     */
    public function selectStoreCreditAccounts(?ShopifyHasStoreCreditAccountsStoreCreditAccountsArgumentsObject $argsObject = null): ShopifyStoreCreditAccountConnectionQueryObject
    {
        $object = new ShopifyStoreCreditAccountConnectionQueryObject("storeCreditAccounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function onCompanyLocation(): ShopifyCompanyLocationQueryObject
    {
        $object = new ShopifyCompanyLocationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomer(): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
