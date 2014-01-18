markdown-flip-diary
===================

This is a digital diary or booklet where you can turn the pages with the arrow keys. 

## Features

* Markdown formatted pages for your pleasure.
* Rendered in Javascript client side, edit and view the diary on your local machine.
* Html5 local storage saves the page you last viewed, readers can continue where they left off.
* No-Flip version for minimalists.
* CSS styles for you to hack.

## Attributions

Many thanks to the libraries I used to put this together. In no particular order:

* [Turn.js](http://www.turnjs.com)
* [markdown-js](https://github.com/evilstreak/markdown-js)
* [jQuery](http://jquery.com)
* [GIMP](http://www.gimp.org/)

Book images created by me in GIMP with the help of [this tutorial](http://www.gimptalk.com/index.php?/topic/41-creating-real-old-rusted-paper-with-gimp-gimp-223/).

## Q: How do I add pages to the diary?

A: Pages are saved under the `pages/` directory, written in plain text and named after the page numbers, i.e. `2.md` for page two, with a `.md` extension (for markdown).

You format the pages using the brilliant Markdown format, more on that at daringfireball.net/projects/markdown.

## Q: Can I style the diary with CSS and web fonts?

A: Certainly. edit `style.css` and have a look at http://www.google.com/fonts

## Q: Can I use the diary with my Dropbox account?

A: You sure can! Just place the diary files in a Public directory and link the the `index.html` file.

## Q: What is the No-Flip version?

A: The noflip version does not use the `turn.js` library to animate a turning page, it only uses jQuery and the Markdown renderer to show your diary. The keyboard arrows still turn pages.

## Q: How can I have multiple diaries and let each save the last viewed page?

A: If you host multiple diaries on the same host the local storage might confuse the saved values between diaries. You can edit `index.html` and set the `var characterID = "";` variable for each diary to fix this. It can be a number or a name, anything really, to differentiate the diaries will do.

# Installation

1. Grab the source from https://github.com/wesleywerner/markdown-flip-diary

2. Download these requirements each from their respective site, and place them under the `scripts/` directory - Note the use of the compressed (min) versions:

* `markdown.min.js`: https://github.com/evilstreak/markdown-js
    * markdown-js is a JavaScript markdown parser.

* `jquery-1.10.2.min.js`: http://jquery.com/
    * jQuery is a fast, small, and feature-rich JavaScript library.
    * Note: As we use the most simplest of jQuery elements if you can only get a newer version it should be fine and dandy. Just edit index.html to match the version you got.

* `turn.min.js`: http://www.turnjs.com
    * Turn.js is a library that will make your content look like a real book or magazine with just HTML content.
    * You can omit this file if you are using the No-Flip diary version.

* Load `index.html` in your browser, customize the `style.css` and add some pages. And finally, upload to your host!

* If you want to use the No-Flip version then edit `index_noflip.html` and `style_noflip.css` instead. Rename them if you wish.

# License

> This program is free software: you can redistribute it and/or modify
> it under the terms of the GNU General Public License as published by
> the Free Software Foundation, either version 3 of the License, or
> any later version.
> 
> This program is distributed in the hope that it will be useful,
> but WITHOUT ANY WARRANTY; without even the implied warranty of
> MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
> GNU General Public License for more details.
> 
> You should have received a copy of the GNU General Public License
> along with this program. If not, see http://www.gnu.org/licenses/.
