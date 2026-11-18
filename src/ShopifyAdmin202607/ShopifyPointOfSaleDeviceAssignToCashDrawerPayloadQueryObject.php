<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `pointOfSaleDeviceAssignToCashDrawer` mutation.
 */
class ShopifyPointOfSaleDeviceAssignToCashDrawerPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PointOfSaleDeviceAssignToCashDrawerPayload";

    /**
     * The point of sale device.
     */
    public function selectPointOfSaleDevice(?ShopifyPointOfSaleDeviceAssignToCashDrawerPayloadPointOfSaleDeviceArgumentsObject $argsObject = null): ShopifyPointOfSaleDeviceQueryObject
    {
        $object = new ShopifyPointOfSaleDeviceQueryObject("pointOfSaleDevice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPointOfSaleDeviceAssignToCashDrawerPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPointOfSaleDeviceAssignToCashDrawerUserErrorQueryObject
    {
        $object = new ShopifyPointOfSaleDeviceAssignToCashDrawerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
