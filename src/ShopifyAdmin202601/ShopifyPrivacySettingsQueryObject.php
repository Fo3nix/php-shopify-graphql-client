<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPrivacySettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PrivacySettings";

    public function selectBanner(ShopifyPrivacySettingsBannerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCookieBannerQueryObject("banner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDataSaleOptOutPage(ShopifyPrivacySettingsDataSaleOptOutPageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDataSaleOptOutPageQueryObject("dataSaleOptOutPage");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrivacyPolicy(ShopifyPrivacySettingsPrivacyPolicyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPrivacyPolicyQueryObject("privacyPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
