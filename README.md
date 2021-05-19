# Articles

Used to create my CPTs for labs.LondonParkour.com. THis replaces the `andyp_articles_cpt`

Contains:

1. Tutorials CPT
1. Tutorials Taxonomy
1. Tutorials Tags

## Shortcode [tutorial_posts]

### Simple Example:

```
[tutorial_posts] Show the {{post_title}} [/tutorial_posts]
```

### Add attributes:
```
[tutorial_posts posts_per_page='10'] Show the {{post_title}} [/tutorial_posts]
[tutorial_posts post_type='demonstration'] Show the {{post_title}} [/tutorial_posts]
```

### Different content fields:

```
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

### Add taxonomy / tag filters:
```
[tutorial_posts cat="cat-leaps" tag="slowmo"] Show the {{post_title}} [/tutorial_posts]
```

### Content Note:

If the post_content contains `{{moustaches}}` itself, these will also be parsed. So you can 
Add variables into your content.


