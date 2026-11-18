<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyComment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCommentSpamUserError;

/**
 * Return type for `commentSpam` mutation.
 */
class ShopifyCommentSpamPayload
{
    protected $comment;
    protected $userErrors;

    
    /**
     * The comment that was marked as spam.
     *
     * @return ShopifyComment
     */
    public function getComment(): ?ShopifyComment
    {
        return $this->comment;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyCommentSpamUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['comment']) && $data['comment'] !== null) {
                $instance->comment = ShopifyComment::fromArray($data['comment']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyCommentSpamUserError::fromArray($item); }, $data['userErrors']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->comment !== null) {
                $data['comment'] = $this->comment->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
