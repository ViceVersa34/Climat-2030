<div id="miseEnForme" class="mise-en-forme invisible">
    <div class="constructeur">
        <a href="" onclick="miseEnForme();">
            <div class="fermer">X</div>
        </a>
        <div>Balise d'ouverture :</div>
        <div class="constructeur-bouton">
            <button id="button-g" class="selectable-button"><span class="font-weight">Gras</span></button>
            <button id="button-t1" class="selectable-button"><span class="">Taille 1</span></button>
            <button id="button-t2" class="selectable-button"><span class="">Taille 2</span></button>
            <button id="button-p" class="selectable-button"><span class="font-family">Police</span></button>
            <button id="button-o" class="selectable-button"><span class="orange-txt">Orange</span></button>
            <button id="button-y" class="selectable-button"><span class="yello-txt">Jaune</span></button>
            <button id="button-n" class="selectable-button"><span class="">Noir</span></button>
            <button id="button-v" class="selectable-button"><span class="green-txt">Vert</span></button>
        </div>
        <div class="boutons-mise-en-forme">
            <div class="bouton-mise-en-forme">
                <button id="copyButton">Copier <span>Balise d'ouverture</span></button>
                <button id="copyClosingButton">Copier <span>balise de fermeture</span></button>
                <button id="copyBrButton">Copier<span> saut de ligne</span></button>
            </div>
            <div class="element-copie">
                <label for="outputText">Élement copié : </label>
                <input type="text" id="outputText" readonly>
            </div>
        </div>
        <script src="/admin/js/miseEnForme.js"></script>
    </div>
</div>