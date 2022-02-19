# NoNumbersKeyboardLibrary

[Remember - Cats and Asian girls are awesome](https://github.com/krvvko)


<img src="src/img/logo.png" style="border-radius: 25px" alt="Logo" width="250"/>

___
## File System:

- `~/src/nnkb/NoNumbersKB.php` - Main Library Class
- `~/examples.php` - Examples
- `~/src/img` - Images folder

## Basic Info:

Basically this library was created for users that in some reasons don't have access
to numbers on their keyboards. 
 - Do you have a broken number key? 
 - Your fingers are too short to reach out numbers on your keyboard? 
 - You've been typing too many numbers, so the keys erased and are not visible anymore? 
 - Have you spilled a beer or energy drink on your keyboard and the number keys have stopped working?
 - While losing a video game, did you hit the keyboard so hard that all the number buttons flew into another dimension?
 - Did thieves come into your house and take your number keys?
 - Did your keyboard manufacturer turn out to be a scammer and put emoticons instead of number buttons?
> **Then this Library is made for you!** 
___
## Installation:
Install the library by using [composer](https://getcomposer.org/):
```php
composer require krvvko_huh/no-numbers-keyboard-library
```

Don't forget about autoload!
```php
require __DIR__ . '/vendor/autoload.php';
```
___
## Examples:
Let's assume that there is a broken key ```5``` on your keyboard:

```php
// Create use and an nnkb (NoNumberKeyBoard) object
use KrvvkoHuh\NoNumbersKeyboardLibrary\NoNumbersKB;
$nnkb = new NoNumbersKB();
```

Now we can complete all basic computer operations, you just need to 
assign the variable to the broken key!
```php
// Assigning variables to broken keys
$five = $nnkb->five();             // Example Number 5
$nine = $nnkb->nine();             // Example Number 9

// Tests (Everything is passing)
echo $five;                        // Output: 5
echo "\n";
echo $five + 5;                    // Output: 10
echo "\n";
echo $five + $nine;                // Output: 14
echo "\n";
var_dump($five == 5);              // True
var_dump($five == 9);              // False
```
___
**If this project will get 10 stars - then I will create library for users without letter keys!**
