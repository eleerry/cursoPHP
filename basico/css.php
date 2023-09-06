<div class="titulo">
    Integração HTML
</div>

<h1 center>
    <?php

        echo 'Olá';
        echo '<small>';
        echo ' Mundo!';
        echo '</small>';

    ?>
</h1>

<?= "<div center azul>Outra forma de me 'expressar'!</div>" ?>

<br>

<div center>
    <button dobro>
        <?= "Legal" ?>
    </button>
</div>

<style>
    button{
        cursor: pointer;
        padding: 5px 20px;
        background-color: #4286F4;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;
        border: none;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286F4
    }

    [dobro] {
        font-size: 2rem;
    }

</style>