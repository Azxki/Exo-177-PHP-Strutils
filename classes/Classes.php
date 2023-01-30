<?php

class Exercices
{

    private $str = "<p>Chaine à manipuler</p>";
    public $bold = "font-weight: bold;";
    public $italic = "font-style: italic;";
    public $underline = "text-decoration: underline black;";
    public $capitalize = "text-transform: capitalize;";
    public $uglify = "font-weight: bold; font-style: italic; text-decoration: underline black;";

    public function __construct()
    {
        $this->str = "<p style='$this->uglify'>Hello</p>";
    }

    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * @param string $str
     */
    public function setStr(string $str): void
    {
        $this->str = $str;
    }

    /**
     * @return string
     */
    public function getBold(): string
    {
        return $this->bold;
    }

    /**
     * @param string $bold
     */
    public function setBold(string $bold): void
    {
        $this->bold = $bold;
    }

    /**
     * @return string
     */
    public function getItalic(): string
    {
        return $this->italic;
    }

    /**
     * @param string $italic
     */
    public function setItalic(string $italic): void
    {
        $this->italic = $italic;
    }

    /**
     * @return string
     */
    public function getUnderline(): string
    {
        return $this->underline;
    }

    /**
     * @param string $underline
     */
    public function setUnderline(string $underline): void
    {
        $this->underline = $underline;
    }

    /**
     * @return string
     */
    public function getCapitalize(): string
    {
        return $this->capitalize;
    }

    /**
     * @param string $capitalize
     */
    public function setCapitalize(string $capitalize): void
    {
        $this->capitalize = $capitalize;
    }

    /**
     * @return string
     */
    public function getUglify(): string
    {
        return $this->uglify;
    }

    /**
     * @param string $uglify
     */
    public function setUglify(string $uglify): void
    {
        $this->uglify = $uglify;
    }

}