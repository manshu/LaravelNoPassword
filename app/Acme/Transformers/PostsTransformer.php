<?php namespace Acme\Transformers;


class PostsTransformer extends Transformer
{

    /**
     * @param $post
     * @return array
     */
    public function transform($post)
    {
        return [
            'title' => $post['title'],
            'body' => $post['body'],
            'active' => (boolean) $post['active']
        ];
    }
}