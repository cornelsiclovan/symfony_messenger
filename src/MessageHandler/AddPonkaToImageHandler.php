<?php

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.09.2019
 * Time: 16:04
 */

class AddPonkaToImageHandler implements MessageHandlerInterface
{
    public function __invoke(AddPonkaToImage $addPonkaToImage)
    {
        dump($addPonkaToImage);
    }
}