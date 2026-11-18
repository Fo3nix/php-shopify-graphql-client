<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The author of a comment on a blog article, containing the commenter's name and email address. This information helps merchants moderate comments and potentially engage with their community.
 *
 * For example, when reviewing pending comments, merchants can see the commenter's name and email to help with moderation decisions or to enable follow-up communication if needed.
 *
 * Use the `CommentAuthor` object to:
 * - Display comment attribution
 * - Support comment moderation workflows
 * - Enable merchant-to-reader communication
 */
class ShopifyCommentAuthorQueryObject extends QueryObject
{
    const OBJECT_NAME = "CommentAuthor";

    /**
     * The author's email.
     */
    public function selectEmail(): static
    {
        $this->selectField("email");

        return $this;
    }

    /**
     * The author’s name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
