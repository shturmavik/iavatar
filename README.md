# Uploaded image like avatar via JavaScript
  -  Can set type of files: accept="image/jpeg,image/png"
  -  Can set img from data base as uploaded early: img-default="avatar.jpeg"
  -  Set a path to url for request: url-action="ajax.php">
  -  Post request: 

```html
  Array
  (
      [name] => apple.png
      [type] => image/png
      [tmp_name] => /private/var/tmp/phpYwMeRS
      [error] => 0
      [size] => 20758
  )
```

Install:
```html
<div id="iavatar"
     accept="image/jpeg,image/png"
     img-default="avatar.jpeg"
     url-action="ajax.php">
</div>
```

I set limit for size of image not more 2mb

- Demo: https://shturmavik.github.io/iavatar/
- Codepen: https://codepen.io/Shturmavik/pen/ExVBRQE

License
----
MIT
