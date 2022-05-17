<?php require_once 'views/header.php';?>
<div id="main">
    <h1 class="center">Replies</h1>
    <table >
        <thead>
            <tr>
                <th>Autor</th>
                <th>Mensaje</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once 'models/reply.php';
                foreach($this->reply as $row){
                    $reply = new Replies();
                    $reply = $row;  
            ?>
            <tr>
                <td><?php echo $reply->userID?></td>
                <td><?php echo $reply->replyContent?></a></td>
                <td><?php echo $reply->replyDate?></td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</div>
<?php require_once 'views/footer.php';?>
