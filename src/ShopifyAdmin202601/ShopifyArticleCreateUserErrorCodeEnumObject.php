<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ArticleCreateUserError`.
 */
class ShopifyArticleCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Can't create an article author if both author name and user ID are supplied.
     */
    const AMBIGUOUS_AUTHOR = "AMBIGUOUS_AUTHOR";
    /**
     * Can't create a blog from input if a blog ID is supplied.
     */
    const AMBIGUOUS_BLOG = "AMBIGUOUS_BLOG";
    /**
     * Can't create an article if both author name and user ID are blank.
     */
    const AUTHOR_FIELD_REQUIRED = "AUTHOR_FIELD_REQUIRED";
    /**
     * User must exist if a user ID is supplied.
     */
    const AUTHOR_MUST_EXIST = "AUTHOR_MUST_EXIST";
    /**
     * Can’t set isPublished to true and also set a future publish date.
     */
    const INVALID_PUBLISH_DATE = "INVALID_PUBLISH_DATE";
    /**
     * Must reference or create a blog when creating an article.
     */
    const BLOG_REFERENCE_REQUIRED = "BLOG_REFERENCE_REQUIRED";
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
     * The input value is too short.
     */
    const TOO_SHORT = "TOO_SHORT";
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
