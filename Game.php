<?php

declare(strict_types=1); // Force type checking

/**
 * Game Class
 *
 * Filename:    Game.php
 * Author:      Adrian Gould
 * Date:        2025-02-26
 */
class Game
{
    public string $greeting;
    protected int $count;
    private readonly int $readonlyCount;
    private string $name;
    private string $type;

    /**
     * Constructor for Games
     *
     * @param string $name
     * @param string $type
     */
    public function __construct(string $name, string $type)
    {
        $this->name = $name ?? "";
//        The above replaces the following five lines of code
//
//        if (isset($name)) {
//            $this->name=$name;
//        } else {
//            $this->name="";
//        }

        $this->type = $type ?? "";
    }


    public function setName(string $name)
    {
        $name = trim($name);
        if($name==''){
            return false;
        }
        $this->name = $name;
        return true;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the game details as a string
     *
     * @return string
     */
    public function details(): string
    {
        return "Name: {$this->name} is a {$this->type} game.";
    }

    /**
     * Destructor for game
     */
    public function __destruct()
    {
        // do nothing
    }
}