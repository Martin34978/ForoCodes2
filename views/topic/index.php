<?php require_once 'views/header.php';?>
<div id="main">
    <h1 class="center">Topics</h1>
    <table >
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once 'models/topic.php';
                foreach($this->topic as $row){
                    $topic = new Topic();
                    $topic = $row;  
            ?>
            <tr>
                <td><a href="replies?topicID=<?php echo $topic->topicID ?>"><?php echo $topic->topicName?></a></td>
                <td><?php echo $topic->topicDate?></td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</div>
<?php require_once 'views/footer.php';?>
