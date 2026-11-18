<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the CompanyContact query.
 */
class ShopifyCompanyContactSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `company_id` value.
     */
    const COMPANY_ID = "COMPANY_ID";
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `email` value.
     */
    const EMAIL = "EMAIL";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `name` value.
     */
    const NAME = "NAME";
    /**
     * Sort by the `name_email` value.
     */
    const NAME_EMAIL = "NAME_EMAIL";
    /**
     * Sort by relevance to the search terms when the `query` parameter is specified on the connection.
     * Don't use this sort key when no search query is specified.
     */
    const RELEVANCE = "RELEVANCE";
    /**
     * Sort by the `title` value.
     */
    const TITLE = "TITLE";
    /**
     * Sort by the `updated_at` value.
     */
    const UPDATED_AT = "UPDATED_AT";
}
