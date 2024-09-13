<?php
if ($_messages) { ?>

    <div class="container-message">

        <?php
        foreach ($_messages as $message) {
            ?>
            <div class="content-message <?php $message['type'] ?>-message">
                <?php $message['message'] ?>
            </div>

        <?php }; ?>

    </div>

    <?php }; ?>

    <script src="./public/js/message.js"></script>