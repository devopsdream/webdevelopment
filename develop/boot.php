<!DOCTYPE html>
<html>
<head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bootstrap</title>
  <style>
  .menu li {
    list-style: none;
    display: inline;
    background: #52a6df;
    margin: 1px 1px 1px 1px;
    padding: 10px;
  }
  .dropdown {
    visibility: hidden;
    position: absolute;
    float: right;
  }
.site-navigation ul li:hover > ul {
  visibility: visible;
}
.menu a {
  text-decoration: none;
}
.dropdown li {
  clear: both;
  display: block;
}
  </style>
</head>
<body>
  <header>
    <nav class="site-navigation">
      <ul class="menu">
        <li class="menu-item"><a href="#">HOME</a></li>
        <li class="menu-item"><a href="#">TUTORIALS</a>
          <ul class="dropdown">
            <li class="menu-item sub-menu"><a href="#">LINUX</a></li>
            <li class="menu-item sub-menu"><a href="#">VIRTUALIZATION</a></li>
            <li class="menu-item sub-menu"><a href="#">WEB DEVELOPMENT</a></li>
            <li class="menu-item sub-menu"><a href="#">DATABASES</a></li>
          </ul>
        </li>
        <li class="menu-item"><a href="#">ABOUT</a></li>
        <li class="menu-item"><a href="#">CONTACT</a></li>
      </ul>
    </nav>
    <p>This is the command to run<pre><code>function(){
      $(document).ready(function(){
    }
    });
    }</code></p></pre>
  </header>
</body>
</html>
