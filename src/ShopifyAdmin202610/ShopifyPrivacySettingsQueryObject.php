<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shop's privacy settings.
 */
class ShopifyPrivacySettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PrivacySettings";

    /**
     * Banner customizations for the 'cookie banner'.
     */
    public function selectBanner(?ShopifyPrivacySettingsBannerArgumentsObject $argsObject = null): ShopifyCookieBannerQueryObject
    {
        $object = new ShopifyCookieBannerQueryObject("banner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A shop's data sale opt out page (e.g. CCPA).
     */
    public function selectDataSaleOptOutPage(?ShopifyPrivacySettingsDataSaleOptOutPageArgumentsObject $argsObject = null): ShopifyDataSaleOptOutPageQueryObject
    {
        $object = new ShopifyDataSaleOptOutPageQueryObject("dataSaleOptOutPage");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A shop's privacy policy settings.
     */
    public function selectPrivacyPolicy(?ShopifyPrivacySettingsPrivacyPolicyArgumentsObject $argsObject = null): ShopifyPrivacyPolicyQueryObject
    {
        $object = new ShopifyPrivacyPolicyQueryObject("privacyPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
