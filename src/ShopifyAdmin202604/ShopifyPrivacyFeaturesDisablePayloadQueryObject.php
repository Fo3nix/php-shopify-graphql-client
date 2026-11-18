<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `privacyFeaturesDisable` mutation.
 */
class ShopifyPrivacyFeaturesDisablePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PrivacyFeaturesDisablePayload";

    /**
     * The privacy features that were disabled.
     */
    public function selectFeaturesDisabled(): static
    {
        $this->selectField("featuresDisabled");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPrivacyFeaturesDisablePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPrivacyFeaturesDisableUserErrorQueryObject
    {
        $object = new ShopifyPrivacyFeaturesDisableUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
