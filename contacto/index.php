<!doctype html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Contacto - Joqix-Games</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	   <link rel="stylesheet" href="../css/main.css" class="css">
  </head>
  <body class="d-flex flex-column h-100">
    <header>
  <?php include __DIR__."/../partials/menu-part.php"?>
</header>
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
   <!--Section: Contact v.2-->
<section class="mb-4">
<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Contacta con Joqix</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">
    ¿Tienes alguna pregunta que hacerme? 
    ¿Quieres hacerme alguna propuesta? 
    ¿Has encontrado un error en la web? 
    Puedes contactar conmigo mediante este formulario, intentaré responderte lo antes posible. 
</p>
<div class="row">
    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
       
        <!-- Do not change the code! -->
<a id="foxyform_embed_link_336227" href="http://es.foxyform.com/">foxyform</a>
<script type="text/javascript">
(function(d, t){
   var g = d.createElement(t),
       s = d.getElementsByTagName(t)[0];
   g.src = "http://es.foxyform.com/js.php?id=336227&sec_hash=563d6118796&width=100%";
   s.parentNode.insertBefore(g, s);
}(document, "script"));
</script>
<!-- Do not change the code! -->
    </div>
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p><a href="mailto:joqixfkj@gmail.com">joqixfkj@gmail.com</a></p>
            </li>
        </ul>
        <ul class="list-unstyled mb-0">
            <li><i class="fas fa-globe-europe mt-4 fa-2x"></i>
                <p><a href="http://joqix.unaux.com" target="_blank">Página web</a></p>
            </li>
        </ul>
        <ul class="list-unstyled mb-0">
                <li><i class="fab fa-instagram mt-4 fa-2x"></i>
                    <p><a href="https://www.instagram.com/joqix/" target="_blank">@joqix</a></p>
                </li>
            </ul>
        <ul class="list-unstyled mb-0">
                <li><i class="fab fa-twitter mt-4 fa-2x"></i>
                    <p><a href="https://twitter.com/joqix_fkj" target="_blank">@JoQiX_Fkj</a></p>
                </li>
            </ul>
    </div>
</div>

</section>
<!--Section: Contact v.2-->
  </div>
</main>
<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Web desarrollada por Joaquin Alonso Perianez (Joqix)</span>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function enviar(){
            let nombre=document.querySelector("#name").value;
            let email=document.querySelector("#email").value;
            let subject=document.querySelector("#subject").value;
            let message=document.querySelector("#message").value;
            let link= `mailto:jalonsop12@iesvjp.es?subject=${subject} mensaje de ${name},${email}&body=${message}`;
            window.location.href=link;
        }
    </script>
    </body>
</html>

