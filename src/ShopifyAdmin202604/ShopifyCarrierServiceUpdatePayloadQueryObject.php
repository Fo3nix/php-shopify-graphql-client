<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `carrierServiceUpdate` mutation.
 */
class ShopifyCarrierServiceUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CarrierServiceUpdatePayload";

    /**
     * The updated carrier service.
     */
    public function selectCarrierService(?ShopifyCarrierServiceUpdatePayloadCarrierServiceArgumentsObject $argsObject = null): ShopifyDeliveryCarrierServiceQueryObject
    {
        $object = new ShopifyDeliveryCarrierServiceQueryObject("carrierService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCarrierServiceUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCarrierServiceUpdateUserErrorQueryObject
    {
        $object = new ShopifyCarrierServiceUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
