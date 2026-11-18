<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Specifies the type of the underlying localizable content. This can be used to conditionally render different UI elements such as input fields.
 */
class ShopifyLocalizableContentTypeEnumObject extends EnumObject
{
    /**
     * A JSON string.
     */
    const JSON_STRING = "JSON_STRING";
    /**
     * A JSON.
     */
    const JSON = "JSON";
    /**
     * A link.
     */
    const LINK = "LINK";
    /**
     * A list of links.
     */
    const LIST_LINK = "LIST_LINK";
    /**
     * A list of multi-line texts.
     */
    const LIST_MULTI_LINE_TEXT_FIELD = "LIST_MULTI_LINE_TEXT_FIELD";
    /**
     * A list of single-line texts.
     */
    const LIST_SINGLE_LINE_TEXT_FIELD = "LIST_SINGLE_LINE_TEXT_FIELD";
    /**
     * A list of URLs.
     */
    const LIST_URL = "LIST_URL";
    /**
     * A multi-line text.
     */
    const MULTI_LINE_TEXT_FIELD = "MULTI_LINE_TEXT_FIELD";
    /**
     * A rich text.
     */
    const RICH_TEXT_FIELD = "RICH_TEXT_FIELD";
    /**
     * A single-line text.
     */
    const SINGLE_LINE_TEXT_FIELD = "SINGLE_LINE_TEXT_FIELD";
    /**
     * A string.
     */
    const STRING = "STRING";
    /**
     * A URL.
     */
    const URL = "URL";
    /**
     * A file reference.
     */
    const FILE_REFERENCE = "FILE_REFERENCE";
    /**
     * A list of file references.
     */
    const LIST_FILE_REFERENCE = "LIST_FILE_REFERENCE";
    /**
     * An HTML.
     */
    const HTML = "HTML";
    /**
     * A URI.
     */
    const URI = "URI";
    /**
     * An inline rich text.
     */
    const INLINE_RICH_TEXT = "INLINE_RICH_TEXT";
}
