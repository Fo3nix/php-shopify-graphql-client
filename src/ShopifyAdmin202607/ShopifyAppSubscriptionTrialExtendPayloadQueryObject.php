<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `appSubscriptionTrialExtend` mutation.
 */
class ShopifyAppSubscriptionTrialExtendPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionTrialExtendPayload";

    /**
     * The app subscription that had its trial extended.
     */
    public function selectAppSubscription(?ShopifyAppSubscriptionTrialExtendPayloadAppSubscriptionArgumentsObject $argsObject = null): ShopifyAppSubscriptionQueryObject
    {
        $object = new ShopifyAppSubscriptionQueryObject("appSubscription");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyAppSubscriptionTrialExtendPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyAppSubscriptionTrialExtendUserErrorQueryObject
    {
        $object = new ShopifyAppSubscriptionTrialExtendUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
