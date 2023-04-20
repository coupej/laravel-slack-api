<?php

namespace Vluzrmos\SlackApi\Methods;

use Vluzrmos\SlackApi\Contracts\SlackReaction;

class Reaction extends SlackMethod implements SlackReaction
{
    protected $methodsGroup = 'reactions.';


    /**
     * This method returns the reaction on a file or file comment.
     *
     * @param array $options ['file' = 'F1234567890', 'file_comment' => 'Fc1234567890', 'full'=>true, 'timestamp'=>'1524523204.000192']
     */

    public function get($options = [])
    {
        return $this->method('get', $options);
    }


}
