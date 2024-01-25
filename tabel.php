<div id="mainBox">

    <p>
        Some text idk
    </p>
    <?php

    $sql = "SELECT trainer.id, trainer.nickname, pokemon.pokemon
            FROM pokemon
            INNER JOIN trainer ON trainer.id=pokemon.trainer_id";

    $result = $conn->query($sql);

    ?>





</div>