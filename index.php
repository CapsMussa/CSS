<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FlexBox</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="head.css">
</head>
<body>

<script>
    $("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
          $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

             window.location.hash = hash;
            });
        }
    });
    });
</script>
<a name="home"><img src="img/1.jpg" class="one"/></a>
<div class="container">
    <div class="block">Lorem ipsumdolor sit amet, consectetur adipisicing elit...</div>
</div>
<div class="block_right">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facilis id maxime quae, similique temporibus.
</div>
<form action="#">
    <input type="submit" value="DONATE NOW" class="inp">
</form>

<a name="catalog" class="catalog">
<div class="head_bl_cat_l">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit.</div>
<div class="head_bl_cat_r">Cum repellendus repudiandae sint ut. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, quam? Facere nisi quaerat ratione voluptatem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate magni maiores nisi, sed sunt veniam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id libero optio ratione soluta voluptas? Ducimus perspiciatis quidem quisquam ut veniam!</div>
</a>
<form action="#">
    <input type="submit" value="DONATE" class="donate">
</form>

<a name="api" class="api_blog">
<div class="head_api">
    <div class="head_api_text">LATEST CAMPAIGNS</div>
</div>
    <div class="text_api">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi asperiores assumenda at atque aut commodi consequatur cupiditate doloremque eaque earum, eius, error est iste itaque, laudantium libero maiores placeat quasi quidem quis quisquam recusandae sapiente temporibus ullam ut voluptates!</div>
<div class="text_api">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda corporis dignissimos dolor doloremque dolores dolorum eligendi esse eum illum iste iusto libero minima molestiae numquam porro quasi, quod quos reprehenderit sapiente sequi similique temporibus ullam vel. Adipisci animi dolor eveniet labore laborum maiores natus nemo neque officiis perferendis porro praesentium quos recusandae, repellat similique! Dolore doloremque exercitationem officiis perspiciatis provident!</div>
</a>



<a name="copy">
    <div class="copy_text"><a style="text-decoration: none; color:#fff;" href="https://github.com/CapsMussa/">@CapsMussa->GitHub</a></div>
</a>
<div class="head">
    <img src="img/logo.png" class="img"/>
    <a href="#home" class="object">Home</a>
    <a href="#catalog" class="object">Catalog</a>
    <a href="#api" class="object">Donations</a>
    <a href="#home" class="object">PhotoStart</a>
    <a href="#copy" class="object">Кто мы?</a>
</div>
</body>
</html>
