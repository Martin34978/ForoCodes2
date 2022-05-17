<?php require_once 'views/header.php';?>
<div id="main">
    <h1 class="center">Categorías</h1>
    <table >
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once 'models/category.php';
                foreach($this->category as $row){
                    $category = new Categories();
                    $category = $row;  
            ?>
            <tr>
                <td><a href="topics?catID=<?php echo $category->catID ?>"><?php echo $category->catName?></a></td>
                <td><?php echo $category->catDesc?></td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</div>
<?php require_once 'views/footer.php';?>
