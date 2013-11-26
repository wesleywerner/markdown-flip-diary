markdown-flip-diary
===================

A digital diary or booklet composed of other libraries. You can turn the pages.

Pages are written in plain text files named after the page numbers, i.e. `2.md` for page two, and so forth. You can format the pages using the brilliant Markdown format, more on that at daringfireball.net/projects/markdown

This all works client side, allowing you to edit and view the diary on your local machine, before uploading to your host.

# Installation

1. Grab the source from https://github.com/wesleywerner/markdown-flip-diary

2. Download these requirements each from their respective site, and place them under the `scripts/` directory - Note the use of the compressed (min) versions:

* `turn.min.js`: http://www.turnjs.com
    * Turn.js is a library that will make your content look like a real book or magazine with just HTML content.
    
* `markdown.min.js`: https://github.com/evilstreak/markdown-js
    * markdown-js is a JavaScript markdown parser.

* `jquery-1.10.2.min.js`: http://jquery.com/
    * jQuery is a fast, small, and feature-rich JavaScript library.  
    * Note: As we use the most simplest of jQuery elements if you can only get a newer version it should be fine and dandy. Just edit index.html to match the version you got.

* Load `index.html` in your browser, customize the styles and add some pages. And finally, upload to your host!

# Questions and Answers

## Q: How do I write new pages?  

A: Save them in the pages/ directory, name them after the page number, with a `.md` extension (for markdown). Pages start with `2.md` as `cover.md` takes up the first page.

## Q: Can I style with some nicer web fonts?

A: Certainly. Have a look at http://www.google.com/fonts and `@import` within `style.css`. Enjoy!

## Q: Can I link my diary with my Dropbox account?

A: You sure can! Just place the diary files in a Public directory and link the the index.html file.

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

# Attributions

Many thanks to all the projects I used to glue this together! In no particular order:

* [Turn.js](http://www.turnjs.com)
* [markdown-js](https://github.com/evilstreak/markdown-js)
* [jQuery](http://jquery.com)
* [GIMP](http://www.gimp.org/)

Book images created by me in GIMP with the help of [this tutorial](http://www.gimptalk.com/index.php?/topic/41-creating-real-old-rusted-paper-with-gimp-gimp-223/).
