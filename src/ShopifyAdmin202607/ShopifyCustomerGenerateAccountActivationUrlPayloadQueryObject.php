<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerGenerateAccountActivationUrl` mutation.
 */
class ShopifyCustomerGenerateAccountActivationUrlPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerGenerateAccountActivationUrlPayload";

    /**
     * The generated account activation URL.
     */
    public function selectAccountActivationUrl(): static
    {
        $this->selectField("accountActivationUrl");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerGenerateAccountActivationUrlPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
