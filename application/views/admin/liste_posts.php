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
                <th class="border-top-0"></th>
                <th class="border-top-0"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listePosts as $post) { ?>
            <tr>
                <td>
                    <img 
                        src="<?php echo upfile_url($post['image']) ?>"
                        width="100"
                    >
                </td>
                <td><?php echo $post['titre'] ?></td>
                <td><?php echo $post['nom_categorie'] ?></td>
                <td>
                    <a href="#"
                        class="btn d-grid btn-primary text-white">
                        <i class="fas fa-info-circle"></i>
                    </a>
                </td>
                <td>
                    <a href="#"
                        class="btn d-grid btn-secondary text-white">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </td>
                <td>
                    <a href="#"
                        class="btn d-grid btn-danger text-white">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Suivant</a>
            </li>
        </ul>
    </nav>
</div>