<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `MetafieldDefinitionDeleteUserError`.
 */
class ShopifyMetafieldDefinitionDeleteUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value needs to be blank.
     */
    const PRESENT = "PRESENT";
    /**
     * Definition not found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * An internal error occurred.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * Deleting an id type metafield definition requires deletion of its associated metafields.
     */
    const ID_TYPE_DELETION_ERROR = "ID_TYPE_DELETION_ERROR";
    /**
     * Deleting a reference type metafield definition requires deletion of its associated metafields.
     */
    const REFERENCE_TYPE_DELETION_ERROR = "REFERENCE_TYPE_DELETION_ERROR";
    /**
     * Deleting a definition in a reserved namespace requires deletion of its associated metafields.
     */
    const RESERVED_NAMESPACE_ORPHANED_METAFIELDS = "RESERVED_NAMESPACE_ORPHANED_METAFIELDS";
    /**
     * Action cannot proceed. Definition is currently in use.
     */
    const METAFIELD_DEFINITION_IN_USE = "METAFIELD_DEFINITION_IN_USE";
    /**
     * Definition is managed by app configuration and cannot be modified through the API.
     */
    const APP_CONFIG_MANAGED = "APP_CONFIG_MANAGED";
    /**
     * Definition is required by an installed app and cannot be deleted.
     */
    const STANDARD_METAFIELD_DEFINITION_DEPENDENT_ON_APP = "STANDARD_METAFIELD_DEFINITION_DEPENDENT_ON_APP";
    /**
     * Owner type can't be used in this mutation.
     */
    const DISALLOWED_OWNER_TYPE = "DISALLOWED_OWNER_TYPE";
}
