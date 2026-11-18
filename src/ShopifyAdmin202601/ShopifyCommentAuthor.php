<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

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
class ShopifyCommentAuthor
{
    protected $email;
    protected $name;

    
    /**
     * The author's email.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    
    /**
     * The author’s name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['email']) && $data['email'] !== null) {
                $instance->email = $data['email'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
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
            if ($this->email !== null) {
                $data['email'] = $this->email;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            return $data;
        }
}
