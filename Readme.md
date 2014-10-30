SilverStripe Split Menu
================================

Requirements
------------
- SilverStripe 3.0
- SilverStripe CMS module

Installation
------------
- Simply drop into silverstripe root (using whatever method)
- Ensure the folder is named 'splitmenu'
- dev/build

Usage
-----
In your templates, instead of using `$Menu`, use `$SplitMenu`. By default this will give you your menu split into two even segments (if it's an even number, obviously one side will have one more item if it's an odd number. Point is it won't divide the menu 3:10 for example, it'll be 7:6). As with the default `$Menu` the `$SplitMenu` option will also take a _level_ parameter (eg for splitting a section menu), and will also take a second parameter of how many _sections_ you with the menu to be divided into (2 by default, but this could be eg. 3 making sections of 4:4:4 for 12 items). ie. `$SplitMenu(1,3)` splits the main menu into 3 segments.

About
-----
Comes in handy when you have a design that calls for a logo in the middle of the menu, for example.

Notes
-----
The function is applied via Extension to your page controllers, thus can be used from PHP too, in the usual fashion.
