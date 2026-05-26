<?php require_once '../header.php'; ?>

    <main class="container">

        <form class="container__formulario" action="/novo-video" method="POST">
            <h2 class="formulario__titulo">Envie um vídeo!</h3>
                <div class="formulario__campo">
                    <label class="campo__etiqueta" for="url">Link embed</label>
                    <input name="url" class="campo__escrita"
                        placeholder="Por exemplo: https://www.youtube.com/embed/FAY1K2aUg5g" id='url' required/>
                </div>
                
                <div class="formulario__campo">
                    <label class="campo__etiqueta" for="title">Titulo do vídeo</label>
                    <input name="title" class="campo__escrita" required placeholder="Neste campo, dê o nome do vídeo"
                        id='title' />
                </div>

                <input class="formulario__botao" type="submit" value="Enviar" />
        </form>

    </main>

</body>

</html>