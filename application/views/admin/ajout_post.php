<h3 class="box-title">Ajout d'un post</h3>
<?php echo form_open_multipart('admin/ajouterPost'); ?>
    <div class="form-group mb-4">
        <label class="col-sm-12">Catégorie</label>

        <div class="col-sm-12 border-bottom">
            <select 
                class="form-select shadow-none p-0 border-0 form-control-line"
                name="categ"
            >
                <option value="">--</option>
                <?php foreach ($listeCateg as $categ) { ?>
                    <option value="<?php echo $categ['id'] ?>"><?php echo $categ['nom'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group mb-4">
        <label class="col-md-12 p-0">Titre</label>
        <div class="col-md-12 border-bottom p-0">
            <input type="text"
                class="form-control p-0 border-0" name="titre"> </div>
    </div>
    <div class="form-group mb-4">
        <label class="col-md-12 p-0">Résumé</label>
        <div class="col-md-12 border-bottom p-0">
            <textarea rows="3" class="form-control p-0 border-0" name="resume"></textarea>
        </div>
    </div>
    <div class="form-group mb-4">
        <label class="col-md-12 p-0">Contenu</label>
        <div class="col-md-12 border-bottom p-0">
            <textarea rows="8" class="form-control p-0 border-0" name="contenu"></textarea>
        </div>
    </div>
    <div class="form-group mb-4">
        <label class="col-md-12 p-0">Image</label>
        <div class="col-md-12 border-bottom p-0">
            <input type="file"
                class="form-control p-0 border-0" name="img"> </div>
    </div>
    <div class="form-group mb-4">
        <div class="col-sm-12">
            <button class="btn btn-secondary"><a href="<?php echo site_url('admin') ?>" style="color:black;">Annuler</a></button>
            <button type="submit" class="btn btn-success">Enregister</button>
        </div>
    </div>