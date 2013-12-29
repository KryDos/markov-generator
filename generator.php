<?php 
class TextGenerator
{
    /**
     * rules array
     */
    private $_words_array;

    /**
     * variable which containe generated text
     */
    private $_text;

    /**
     * words for serching it in 'words' array
     */
    private $_word;
    private $_next_word;

    function __construct($words_file = 'eng_words.php') 
    {
        $this->_words_array = require($words_file);
    }

    /**
     * generate random text 
     *
     * @param integer $size size of the generated text
     *
     * @return string generated text
     */
    public function generateText($size = 50)
    {
        for($i = 0; $i < $size-1; $i++) {
            /**
             * if $this->_word not in words_array keys 
             * then select new $this->_word
             */
            if(!isset($this->_words_array[$this->_word])) {
                $this->_word =  array_rand($this->_words_array);
                $this->_updateText($this->_word);
            }
        
            /**
             * find releted words in array
             */
            $this->_word = $this->_words_array[$this->_word][array_rand($this->_words_array[$this->_word])];
            $this->_updateText($this->_word);
        }

        return $this->_text;
    }

    /**
     * return text which was generated before
     *
     * @return string
     */
    public function getText()
    {
        return $this->_text;
    }

    /**
     * update _text variable
     */
    private function _updateText($text)
    {
        if(empty($this->_text)) 
            $this->_text = trim($text);
        else
            $this->_text .= ' ' . trim($text);
    }
}
