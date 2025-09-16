<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PrivacySettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PrivacySettings";

    public function selectBanner(PrivacySettingsBannerArgumentsObject $argsObject = null)
    {
        $object = new CookieBannerQueryObject("banner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDataSaleOptOutPage(PrivacySettingsDataSaleOptOutPageArgumentsObject $argsObject = null)
    {
        $object = new DataSaleOptOutPageQueryObject("dataSaleOptOutPage");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrivacyPolicy(PrivacySettingsPrivacyPolicyArgumentsObject $argsObject = null)
    {
        $object = new PrivacyPolicyQueryObject("privacyPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
