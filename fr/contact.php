<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="/css/humour.css">
    <title>L'Humour - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('php/header.php'); ?>
    </header>

    <main>

    <h1 class="top_txt">Contact - <span class="orange-txt size-txt2 txt-g font-family">Climat-2030</span></h1>

    <div class="contact">
        <div class="objet">
            <form>
                <label for="pays">Choisissez un pays :</label>
                <select id="pays" name="pays" onchange="toggleButton()">
                <option value="france">France</option>
                <option value="espagne">Espagne</option>
                <option value="italie">Italie</option>
                <option value="royaume-uni">Royaume-Uni</option>
            </select>
            <button id="monBouton" style="display: none;">Suivant</button>
    </form>
        </div>
    </div>

    <div class="scrollUp">
        <a href="#top"><img src="/img/up-arrow.svg"/></a>
    </div>
<script>
    function toggleButton() {
        var pays = document.getElementById("pays");
        var monBouton = document.getElementById("monBouton");

        if (pays.value !== "") {
        monBouton.style.display = "block";
        } else {
        monBouton.style.display = "none";
        }
    }
</script>
    </main>

    <footer>
        <?php include('php/footer.php'); ?>
    </footer>
</body>
</html>