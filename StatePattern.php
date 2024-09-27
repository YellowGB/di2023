<?php

$player = new MediaPlayer(new RepeatAllState());
$player->nextSong();

$player->transitionTo(new ShuffleState());
$player->nextSong();

$player->transitionTo(new RepeatOneState());
$player->nextSong();

class MediaPlayer
{
    private PlayerState $state;

    public function __construct(PlayerState $initialState)
    {
        $this->transitionTo($initialState);
    }

    public function transitionTo(PlayerState $state)
    {
        $this->state = $state;
        $state->setContext($this);
    }

    public function nextSong()
    {
        $this->state->nextSong();
    }
}

abstract class PlayerState
{
    protected MediaPlayer $mediaplayer;

    public function setContext(MediaPlayer $mediaplayer)
    {
        $this->mediaplayer = $mediaplayer;
    }

    public abstract function nextSong();
}

class RepeatAllState extends PlayerState
{
    public function nextSong()
    {
        echo "Next song will be the next in the list, or the first one if at the end of the list\n";
    }
}

class ShuffleState extends PlayerState
{
    public function nextSong()
    {
        echo "Next song will be a random one\n";
    }
}

class RepeatOneState extends PlayerState
{
    public function nextSong()
    {
        echo "Next song will be the same as the current one\n";
    }
}
