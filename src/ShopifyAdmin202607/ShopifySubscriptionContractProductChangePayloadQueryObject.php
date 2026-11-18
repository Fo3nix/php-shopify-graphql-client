<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionContractProductChange` mutation.
 */
class ShopifySubscriptionContractProductChangePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractProductChangePayload";

    /**
     * The new Subscription Contract object.
     */
    public function selectContract(?ShopifySubscriptionContractProductChangePayloadContractArgumentsObject $argsObject = null): ShopifySubscriptionContractQueryObject
    {
        $object = new ShopifySubscriptionContractQueryObject("contract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The updated Subscription Line.
     */
    public function selectLineUpdated(?ShopifySubscriptionContractProductChangePayloadLineUpdatedArgumentsObject $argsObject = null): ShopifySubscriptionLineQueryObject
    {
        $object = new ShopifySubscriptionLineQueryObject("lineUpdated");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySubscriptionContractProductChangePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionDraftUserErrorQueryObject
    {
        $object = new ShopifySubscriptionDraftUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
