<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Localization extensions associated with the specified resource. For example, the tax id for government invoice.
 */
class ShopifyHasLocalizationExtensionsInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "HasLocalizationExtensions";

    /**
     * List of localization extensions for the resource.
     *
     * @deprecated This connection will be removed in a future version. Use `localizedFields` instead.
     */
    public function selectLocalizationExtensions(?ShopifyHasLocalizationExtensionsLocalizationExtensionsArgumentsObject $argsObject = null): ShopifyLocalizationExtensionConnectionQueryObject
    {
        $object = new ShopifyLocalizationExtensionConnectionQueryObject("localizationExtensions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function onDraftOrder(): ShopifyDraftOrderQueryObject
    {
        $object = new ShopifyDraftOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrder(): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
