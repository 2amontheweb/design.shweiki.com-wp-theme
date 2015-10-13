# Shweiki Design Custom WordPress Theme

### Colors:
  Dark Blue: #00263a
  Black:
  White:

## Plugins Used:
  • Advance Custom Fields
  • Custom Post Types UI
  • Newsletter (Used in WP, but not in theme)
  • Master Slider (Used in WP, but not in theme)

### Pages and their files:

#### EVERY PAGE
```
  header.php
  footer.php
```

#### Home
```
  page-main.php
```


#### About
```
  page.php
  template-parts/content-page.php
```


#### Portfolio
```
  page-portfolio.php
  template-parts/content-portfolio.php
```


#### Portfolio Item
```
  single.php
  template-parts/content-gallery.php
```


#### Blog
```
  index.php
  template-parts/content.php (if have_posts())
  template-parts/content-none.php (if !have_posts())
  sidebar.php
```


#### Blog Post
```
  single.php
  template-parts/content-single.php
  comments.php
```


#### Contact
```
  page.php
  template-parts/content-page.php
```


#### Search: http://localhost:8888/?s=(query_string)
```
  search.php
  template-parts/content-search.php (if have_results())
  template-parts/content-none.php (if !have_results())
  sidebar.php
```


#### Page Not Found: http://localhost:8888/(bad_request)
```
  404.php
```


#### Archives: http://localhost:8888/(year)/(month)/
```
  archive.php (if have_archives())
  content.php (if have_archives())
  404.php (if !have_archives())
```
