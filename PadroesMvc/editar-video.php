<?php

require_once '../database/connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM video WHERE id = ?";
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $id);
$statement->execute();
$video = $statement->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['editar'])) {
    $url = $_POST['url'];
    $title = $_POST['title'];

    $sql = "UPDATE video SET url = ?, title = ? WHERE id = ?";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(1, $url);
    $statement->bindValue(2, $title);
    $statement->bindValue(3, $id);
    $statement->execute();

    header('Location: /');
}
?>

<?php require_once '../header.php'; ?>

    <main class="container">

        <form class="container__formulario" action="/editar-video?id=<?= $id ?>" method="POST">
            <h2 class="formulario__titulo">Editar vídeo</h2>
            <div class="formulario__campo">
                <label class="campo__etiqueta" for="url">Link embed</label>
                <input name="url" class="campo__escrita" value="<?= $video['url'] ?>"
                    placeholder="Por exemplo: https://www.youtube.com/embed/FAY1K2aUg5g" id='url' required/>
            </div>
                
                <div class="formulario__campo">
                    <label class="campo__etiqueta" for="title">Titulo do vídeo</label>
                    <input name="title" class="campo__escrita" value="<?= $video['title'] ?>" required placeholder="Neste campo, dê o nome do vídeo"
                        id='title' />
                </div>

                <input name='editar' class="formulario__botao" type="submit" value="Enviar" />
        </form>

    </main>

</body>

</html>