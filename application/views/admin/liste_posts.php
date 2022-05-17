<div style="display: flex;justify-content:space-between">
    <h3 class="box-title">Liste des posts</h3>
        <button 
            type="button"
            class="btn btn-success text-white col-md-3"
            href="huhuh"
        >
        <a 
            href="<?php echo site_url('admin/ajoutPost') ?>"
            style="color:white;"
        >
            <span><i class="fas fa-plus"></i>Ajouter un post</span>
        </a>
        </button>
    
</div>
<br>
<div class="table-responsive">
    <table class="table text-nowrap">
        <thead>
            <tr>
                <th class="border-top-0"></th>
                <th class="border-top-0">Titre</th>
                <th class="border-top-0">Categorie</th>
                <th class="border-top-0"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listePosts as $post) { ?>
            <tr>
                <td>
                    <img 
                        src="<?php echo upfile_url($post['image']) ?>"
                        width="100%"
                        height ="auto"
                    >
                </td>
                <td><?php echo $post['titre'] ?></td>
                <td><?php echo $post['nom_categorie'] ?></td>
                <td>
                    <a href="<?php echo site_url('admin/deletePost/'.$pagination.'/'.$post['id']) ?>"
                        class="btn d-grid btn-danger text-white">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item <?php if($pagination == 1) echo "disabled" ?>">
            <a class="page-link" href="<?php echo site_url('admin/page/'.($pagination - 1)) ?>">Previous</a>
            </li>
            <li class="page-item">
            <a class="page-link" href="<?php echo site_url('admin/page/'.($pagination + 1)) ?>">Next</a>
            </li>
        </ul>
    </nav>
</div>