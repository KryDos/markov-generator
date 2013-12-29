MARKOV-GENERATOR
========

Description
-----------
Generate text using [Markov chains][1]
You can generate text for what you want. Sometimes result can be very funniest :)

Usage
-----------

 - clone this repo to your project.
 - include 'generator.php' file to file when you want use this generator.
 
```[php]
require 'generator.php';
```
 - use this generator! :)
```[php]
/**
 * Text generator can get one parameter.
 * it's words file name.
 * default it's 'eng_words.php'
 */
$generator = new TextGenerator();
/**
 * can get the one parameter.
 * it's size of the generated text
 * default is 50
echo $generator->generateText();
```

You can also get the generated text via 
```[php]
$generator->getText();
```

 
Feel free to Pull Requests!


  [1]: http://en.wikipedia.org/wiki/Markov_chain
