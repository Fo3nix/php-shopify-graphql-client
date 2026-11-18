<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents information about the configuration of gift cards on the shop.
 */
class ShopifyGiftCardConfigurationQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardConfiguration";

    /**
     * The issue limit for gift cards in the default shop currency.
     */
    public function selectIssueLimit(?ShopifyGiftCardConfigurationIssueLimitArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("issueLimit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The purchase limit for gift cards in the default shop currency.
     */
    public function selectPurchaseLimit(?ShopifyGiftCardConfigurationPurchaseLimitArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("purchaseLimit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
