<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `flowGenerateSignature` mutation.
 */
class ShopifyFlowGenerateSignaturePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FlowGenerateSignaturePayload";

    /**
     * The payload used to generate the signature.
     */
    public function selectPayload(): static
    {
        $this->selectField("payload");

        return $this;
    }

    /**
     * The generated signature.
     */
    public function selectSignature(): static
    {
        $this->selectField("signature");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFlowGenerateSignaturePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
