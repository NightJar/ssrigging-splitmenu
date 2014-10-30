SilverStripe Split Menu
================================

Requirements
------------
- SilverStripe 3.1
- SilverStripe CMS module

Installation
------------
- Simply drop into silverstripe root (using whatever method)
- Ensure the folder is named 'splitmenu'
- dev/build

Usage
-----
In your templates, instead of using `$Menu`, add a 'Split' to make it `$MenuSplit`. By default this will give you your menu split into two even segments (if it's an even number, obviously one side will have one more item if it's an odd number. Point is it won't divide the menu 3:10 for example, it'll be 7:6). As with the default `$Menu` the `$MenuSplit` option will also take a _level_ parameter (eg for splitting a section menu), and will also take a second parameter of how many _sections_ you with the menu to be divided into (2 by default, but this could be eg. 3 making sections of 4:4:4 for 12 items). ie. `$MenuSplit(1,3)` splits the main menu into 3 segments.

The returned list will hold more lists inside it, your segments. So ultimately an opening statement will generally look more like `<% loop $MenuSplit(1,3) %><ul><% loop $Me %>...`

About
-----
Comes in handy when you have a design that calls for a logo in the middle of the menu, for example:
```html
<ul>
	<% loop $MenuSplit.First %>
		<li>...</li>
	<% end_loop %>
</ul>
<div class="brand">$SiteConfig.Title</div>
<ul>
	<% loop $MenuSplit.Last %>
		<li>...</li>
	<% end_loop %>
</ul>
```

Notes
-----
- The function is applied via Extension to your page controllers, thus can be used from PHP too, in the usual fashion.
- The module works by applying another Extension to do the actual splitting to `ArrayList`. Thus you can split any generic ArrayList you like, with `$arraylist->split($segments);`.
- If upgrading from 3.0, please note that it's now `MenuSplit`, not `SplitMenu`. Update your templates accordingly!