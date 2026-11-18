<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionDraftLineAdd` mutation.
 */
class ShopifySubscriptionDraftLineAddPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDraftLineAddPayload";

    /**
     * The Subscription Contract draft object.
     */
    public function selectDraft(?ShopifySubscriptionDraftLineAddPayloadDraftArgumentsObject $argsObject = null): ShopifySubscriptionDraftQueryObject
    {
        $object = new ShopifySubscriptionDraftQueryObject("draft");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The added Subscription Line.
     */
    public function selectLineAdded(?ShopifySubscriptionDraftLineAddPayloadLineAddedArgumentsObject $argsObject = null): ShopifySubscriptionLineQueryObject
    {
        $object = new ShopifySubscriptionLineQueryObject("lineAdded");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySubscriptionDraftLineAddPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionDraftUserErrorQueryObject
    {
        $object = new ShopifySubscriptionDraftUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
