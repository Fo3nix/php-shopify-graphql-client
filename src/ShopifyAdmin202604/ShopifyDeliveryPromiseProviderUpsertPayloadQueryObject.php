<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `deliveryPromiseProviderUpsert` mutation.
 */
class ShopifyDeliveryPromiseProviderUpsertPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryPromiseProviderUpsertPayload";

    /**
     * The created or updated delivery promise provider.
     */
    public function selectDeliveryPromiseProvider(?ShopifyDeliveryPromiseProviderUpsertPayloadDeliveryPromiseProviderArgumentsObject $argsObject = null): ShopifyDeliveryPromiseProviderQueryObject
    {
        $object = new ShopifyDeliveryPromiseProviderQueryObject("deliveryPromiseProvider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDeliveryPromiseProviderUpsertPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDeliveryPromiseProviderUpsertUserErrorQueryObject
    {
        $object = new ShopifyDeliveryPromiseProviderUpsertUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
