
<div id="top"></div>

<div align="center">

<div style="filter: invert(96%) sepia(12%) saturate(1589%) hue-rotate(343deg) brightness(98%) contrast(105%);">
<img src="https://cdn.jsdelivr.net/npm/@mdi/svg@6.7.96/svg/post-outline.svg" style="width:200px;"/>
</div>

<h3 align="center">Custom Post Type : Tutorial Pages</h3>

<p align="center">
     Simple custom post type for tutorial posts on ParkourLabs.com.
</p>    
</div>

##  1. <a name='TableofContents'></a>Table of Contents


* 1. [Table of Contents](#TableofContents)
* 2. [About The Project](#AboutTheProject)
	* 2.1. [Built With](#BuiltWith)
	* 2.2. [Installation](#Installation)
* 3. [Usage](#Usage)
	* 3.1. [Shortcode [tutorial_posts]](#Shortcodetutorial_posts)
		* 3.1.1. [Simple Example:](#SimpleExample:)
		* 3.1.2. [Add attributes:](#Addattributes:)
		* 3.1.3. [Different content fields:](#Differentcontentfields:)
		* 3.1.4. [Add taxonomy / tag filters:](#Addtaxonomytagfilters:)
		* 3.1.5. [Content Note:](#ContentNote:)
* 4. [Customising](#Customising)
* 5. [Contributing](#Contributing)
* 6. [License](#License)
* 7. [Contact](#Contact)
* 8. [Changelog](#Changelog)


##  2. <a name='AboutTheProject'></a>About The Project

Tutorial posts are used on the parkourlabs.com website. Heavily used to list the hundreds of tutorial videos on the site.

<p align="right">(<a href="#top">back to top</a>)</p>


###  2.1. <a name='BuiltWith'></a>Built With

This project was built with the following frameworks, technologies and software.

* [ACF Pro](https://advancedcustomfields.com/)
* [Composer](https://getcomposer.org/)
* [PHP](https://php.net/)
* [Wordpress](https://wordpress.org/)

<p align="right">(<a href="#top">back to top</a>)</p>



###  2.2. <a name='Installation'></a>Installation

These are the steps to get up and running with this plugin.

1. Clone the repo into your wordpress plugin folder
     ```bash
     git clone https://github.com/IORoot/wp-plugin__cpt--tutorial ./wp-content/plugins/cpt-tutorial
     ```
1. Activate the plugin.


<p align="right">(<a href="#top">back to top</a>)</p>

##  3. <a name='Usage'></a>Usage

A new menu option `Tutorials` will appear in the admin sidebar. Here you can define new posts, category and tags.

Contains:

1. Tutorials CPT
1. Tutorials Taxonomy
1. Tutorials Tags
1. Tutorials Shortcode

###  3.1. <a name='Shortcodetutorial_posts'></a>Shortcode [tutorial_posts]

####  3.1.1. <a name='SimpleExample:'></a>Simple Example:

```
[tutorial_posts] Show the {{post_title}} [/tutorial_posts]
```

####  3.1.2. <a name='Addattributes:'></a>Add attributes:
```
[tutorial_posts posts_per_page='10'] Show the {{post_title}} [/tutorial_posts]
[tutorial_posts post_type='demonstration'] Show the {{post_title}} [/tutorial_posts]
```

####  3.1.3. <a name='Differentcontentfields:'></a>Different content fields:

```php
[tutorial_posts posts_per_page='1']

     <h2>Post Fields</h2>
     {{post_title}} 
     {{permalink}} 

     <h2>Sanitize Fields to make them like a slug</h2>
     {{post_title:sanitize}} 

     <h2>Meta Fields</h2>
     {{meta_field}} 

     <h2>Image Fields</h2>
     {{image}} 
     {{path}} 
     {{file}} 
     {{width}} 
     {{height}} 

[/tutorial_posts]
```

####  3.1.4. <a name='Addtaxonomytagfilters:'></a>Add taxonomy / tag filters:
```
[tutorial_posts cat="cat-leaps" tag="slowmo"] Show the {{post_title}} [/tutorial_posts]
```

####  3.1.5. <a name='ContentNote:'></a>Content Note:

If the post_content contains `{{moustaches}}` itself, these will also be parsed. So you can 
Add variables into your content.


##  4. <a name='Customising'></a>Customising

None.

<p align="right">(<a href="#top">back to top</a>)</p>


##  5. <a name='Contributing'></a>Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue.
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



##  6. <a name='License'></a>License

Distributed under the MIT License.

MIT License

Copyright (c) 2022 Andy Pearson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

<p align="right">(<a href="#top">back to top</a>)</p>



##  7. <a name='Contact'></a>Contact

Author Link: [https://github.com/IORoot](https://github.com/IORoot)

<p align="right">(<a href="#top">back to top</a>)</p>


##  8. <a name='Changelog'></a>Changelog

v1.0.0 - Initial.
