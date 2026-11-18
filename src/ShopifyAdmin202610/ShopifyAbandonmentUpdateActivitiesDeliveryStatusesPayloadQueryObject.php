<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `abandonmentUpdateActivitiesDeliveryStatuses` mutation.
 */
class ShopifyAbandonmentUpdateActivitiesDeliveryStatusesPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonmentUpdateActivitiesDeliveryStatusesPayload";

    /**
     * The updated abandonment.
     */
    public function selectAbandonment(?ShopifyAbandonmentUpdateActivitiesDeliveryStatusesPayloadAbandonmentArgumentsObject $argsObject = null): ShopifyAbandonmentQueryObject
    {
        $object = new ShopifyAbandonmentQueryObject("abandonment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyAbandonmentUpdateActivitiesDeliveryStatusesPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyAbandonmentUpdateActivitiesDeliveryStatusesUserErrorQueryObject
    {
        $object = new ShopifyAbandonmentUpdateActivitiesDeliveryStatusesUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
