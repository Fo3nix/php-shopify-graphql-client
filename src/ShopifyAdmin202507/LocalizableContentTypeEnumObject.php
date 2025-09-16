<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class LocalizableContentTypeEnumObject extends EnumObject
{
    const JSON_STRING = "JSON_STRING";
    const JSON = "JSON";
    const LIST_MULTI_LINE_TEXT_FIELD = "LIST_MULTI_LINE_TEXT_FIELD";
    const LIST_SINGLE_LINE_TEXT_FIELD = "LIST_SINGLE_LINE_TEXT_FIELD";
    const LIST_URL = "LIST_URL";
    const MULTI_LINE_TEXT_FIELD = "MULTI_LINE_TEXT_FIELD";
    const RICH_TEXT_FIELD = "RICH_TEXT_FIELD";
    const SINGLE_LINE_TEXT_FIELD = "SINGLE_LINE_TEXT_FIELD";
    const STRING = "STRING";
    const URL = "URL";
    const LINK = "LINK";
    const LIST_LINK = "LIST_LINK";
    const FILE_REFERENCE = "FILE_REFERENCE";
    const LIST_FILE_REFERENCE = "LIST_FILE_REFERENCE";
    const HTML = "HTML";
    const URI = "URI";
    const INLINE_RICH_TEXT = "INLINE_RICH_TEXT";
}
