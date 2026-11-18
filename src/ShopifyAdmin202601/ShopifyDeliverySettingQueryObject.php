<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `DeliverySetting` object enables you to manage shop-wide shipping settings.
 */
class ShopifyDeliverySettingQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliverySetting";

    /**
     * Whether the shop is blocked from converting to full multi-location delivery profiles mode. If the shop is blocked, then the blocking reasons are also returned. Note: this field is effectively deprecated and will be removed in a future version of the API.
     */
    public function selectLegacyModeBlocked(?ShopifyDeliverySettingLegacyModeBlockedArgumentsObject $argsObject = null): ShopifyDeliveryLegacyModeBlockedQueryObject
    {
        $object = new ShopifyDeliveryLegacyModeBlockedQueryObject("legacyModeBlocked");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Enables legacy compatibility mode for the multi-location delivery profiles feature. Note: this field is effectively deprecated and will be removed in a future version of the API.
     */
    public function selectLegacyModeProfiles(): static
    {
        $this->selectField("legacyModeProfiles");

        return $this;
    }
}
