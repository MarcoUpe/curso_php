<?php
    include_once("templates/header.php");
?>

    <div class="container">
        <?php if(isset($printMsg) && $printMsg != ''): ?> 
            <p id="msg"><?= $printMsg ?></p>
        <?php endif; ?>
        <h1 id="main-title">Minha Agenda</h1>
        <?php if(count($contacts) > 0): ?>
            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contacts as $contacts): ?>
                        <tr>
                            <td scope="row"> <?php $contacts["id"] ?></td>
                            <td scope="row"> <?php $contacts["name"] ?></td>
                            <td scope="row"> <?php $contacts["phone"] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p id="empty-list-text">Ainda não há contatos na agenda, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.</p>
        <?php endif; ?>
    </div>

<?php
   include_once("templates/footer.php");
?>