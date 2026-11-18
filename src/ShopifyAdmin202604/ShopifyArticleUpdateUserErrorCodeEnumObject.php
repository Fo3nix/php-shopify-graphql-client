<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ArticleUpdateUserError`.
 */
class ShopifyArticleUpdateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Can't update an article author if both author name and user ID are supplied.
     */
    const AMBIGUOUS_AUTHOR = "AMBIGUOUS_AUTHOR";
    /**
     * Can't create a blog from input if a blog ID is supplied.
     */
    const AMBIGUOUS_BLOG = "AMBIGUOUS_BLOG";
    /**
     * User must exist if a user ID is supplied.
     */
    const AUTHOR_MUST_EXIST = "AUTHOR_MUST_EXIST";
    /**
     * Can’t set isPublished to true and also set a future publish date.
     */
    const INVALID_PUBLISH_DATE = "INVALID_PUBLISH_DATE";
    /**
     * Image upload failed.
     */
    const UPLOAD_FAILED = "UPLOAD_FAILED";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The record with the ID used as the input value couldn't be found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The value is invalid for the metafield type or for the definition options.
     */
    const INVALID_VALUE = "INVALID_VALUE";
    /**
     * The metafield type is invalid.
     */
    const INVALID_TYPE = "INVALID_TYPE";
}
