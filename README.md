markdown-flip-diary
===================

A markdown rendered flip diary.

This project is a merger of a couple of other libraries, glued together with the included getpage.php script, provides a digital book that you can flip through.

Pages are written in plain text files named after the page numbers, i.e. `2.md` for page two, and so forth. You can format the pages using the brilliant Markdown format, more on that at daringfireball.net/projects/markdown

# setup steps

_You need a host that supports php._

1. grab the getpage.php file into your new diary directory.

2. get the markdown renderer file `markdown.php` from http://michelf.ca/projects/php-markdown/

3. get the book flip `turn.min.js` file from http://www.turnjs.com

4. create a `pages` directory where you will be saving pages with the follwing names: `2.md` for page 2, `3.md` for page 3, and so forth.

5. create images `cover.jpg` and `left-page.jpg` and `right-page.jpg` for your pages, these are 400 x 500 in size but easily adjustible to suit your needs.

6. Edit the `style.css` file to customize your look.
