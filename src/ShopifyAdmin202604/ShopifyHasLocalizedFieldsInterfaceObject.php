<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Localized fields associated with the specified resource.
 */
class ShopifyHasLocalizedFieldsInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "HasLocalizedFields";

    /**
     * List of localized fields for the resource.
     */
    public function selectLocalizedFields(?ShopifyHasLocalizedFieldsLocalizedFieldsArgumentsObject $argsObject = null): ShopifyLocalizedFieldConnectionQueryObject
    {
        $object = new ShopifyLocalizedFieldConnectionQueryObject("localizedFields");
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
