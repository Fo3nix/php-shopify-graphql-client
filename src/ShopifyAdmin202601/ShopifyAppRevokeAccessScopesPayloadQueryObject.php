<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `appRevokeAccessScopes` mutation.
 */
class ShopifyAppRevokeAccessScopesPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppRevokeAccessScopesPayload";

    /**
     * The list of scope handles that have been revoked.
     */
    public function selectRevoked(?ShopifyAppRevokeAccessScopesPayloadRevokedArgumentsObject $argsObject = null): ShopifyAccessScopeQueryObject
    {
        $object = new ShopifyAccessScopeQueryObject("revoked");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyAppRevokeAccessScopesPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyAppRevokeAccessScopesAppRevokeScopeErrorQueryObject
    {
        $object = new ShopifyAppRevokeAccessScopesAppRevokeScopeErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
