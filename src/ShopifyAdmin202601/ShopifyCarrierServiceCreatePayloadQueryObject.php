<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `carrierServiceCreate` mutation.
 */
class ShopifyCarrierServiceCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CarrierServiceCreatePayload";

    /**
     * The created carrier service.
     */
    public function selectCarrierService(?ShopifyCarrierServiceCreatePayloadCarrierServiceArgumentsObject $argsObject = null): ShopifyDeliveryCarrierServiceQueryObject
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
    public function selectUserErrors(?ShopifyCarrierServiceCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCarrierServiceCreateUserErrorQueryObject
    {
        $object = new ShopifyCarrierServiceCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
