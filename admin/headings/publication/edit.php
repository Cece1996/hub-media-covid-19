<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-12 col-lg-4">
        <h2>Ajout d'un <?= heading('singular') ?></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href=".">Accueil</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= route('home') ?>"><?= heading('title') ?></a>
            </li>
            <li class="breadcrumb-item active">
                <strong><?= heading('male') ? 'Nouvel' : 'Nouvelle' ?> <?= heading('singular') ?></strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Ajout d'<?= heading('male') ? 'un' : 'une' ?> <?= heading('singular') ?></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" action="<?= route('save'); ?>">
                        <input type="hidden" name="statut" value="BROUILLON">
                        <input type="hidden" name="id" value="<?= _e($data['id']) ?>">
                        <div class="form-group row">
                            <label for="pubAuteur" class="col-lg-2 col-form-label">Auteur</label>
                            <div class="col-lg-10">
                                <input type="text" name="auteur" value="<?= _e($data['auteur']) ?>" id="pubAuteur" placeholder="Renseignez votre nom (Ex: Jean SAGUE)" required class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Catégorie</label>
                            <div class="col-lg-4">
                                <div>
                                    <label for="pubCategorieActualite"><input type="radio" name="categorie" id="pubCategorieActualite" value="ACTUALITE" <?= ($data['categorie'] == 'ACTUALITE') ? 'checked' : ''; ?> required> Actualité</label>
                                </div>
                                <div>
                                    <label for="pubCategorieSensibilisation"><input type="radio" name="categorie" id="pubCategorieSensibilisation" value="SENSIBILISATION" <?= ($data['categorie'] == 'SENSIBILISATION') ? 'checked' : ''; ?> required> Sensibilisation</label>
                                </div>
                                <div>
                                    <label for="pubCategorieMesures"><input type="radio" name="categorie" id="pubCategorieMesures" value="MESURES" <?= ($data['categorie'] == 'MESURES') ? 'checked' : ''; ?> required> Mesures gouvernementales</label>
                                </div>
                                <div>
                                    <label for="pubCategoriePoint"><input type="radio" name="categorie" id="pubCategoriePoint" value="POINT-PRESSE" <?= ($data['categorie'] == 'POINT-PRESSE') ? 'checked' : ''; ?> required> Points de presse</label>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="col-lg-4">
                                <div>
                                    <label for="pubCategorieFake"><input type="radio" name="categorie" id="pubCategorieFake" value="FAKE" <?= ($data['categorie'] == 'FAKE') ? 'checked' : ''; ?> required> Fake news</label>
                                </div>
                                <div>
                                    <label for="pubCategorieCartes"><input type="radio" name="categorie" id="pubCategorieCartes" value="CARTES" <?= ($data['categorie'] == 'CARTES') ? 'checked' : ''; ?> required> Cartes</label>
                                </div>
                                <div>
                                    <label for="pubCategorieJeux"><input type="radio" name="categorie" id="pubCategorieJeux" value="JEUX" <?= ($data['categorie'] == 'JEUX') ? 'checked' : ''; ?> required> Jeux</label>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <label for="pubTitre" class="col-lg-2 col-form-label">Titre *</label>
                            <div class="col-lg-10">
                                <input type="text" name="titre" value="<?= _e($data['titre']) ?>" id="pubTitre" placeholder="Donnez un titre à votre publication" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pubImage" class="col-lg-2 col-form-label">Image *</label>
                            <div class="col-lg-10">
                                <img src="<?= _e($data['image']) ?>" alt="Image de l'article" width="25%" style="margin-bottom: 10px">
                                <input type="url" name="image" value="<?= _e($data['image']) ?>" id="pubImage" placeholder="Renseignez l'adresse du lien de l'image" required class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Type de publication</label>
                            <div>
                                <label for="pubTypeTexte"><input type="radio" checked name="type" id="pubTypeTexte" value="TEXTE" data-target="#contentTypeTexte" required class="form-control"> Texte</label>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <label for="pubContentTexte" class="col-lg-2">Contenu *</label>
                            <textarea name="contenu" id="pubContentTexte" cols="30" rows="20" placeholder="Soyez inspirez, rédigez quelque chose qui a de la poigne ..." required class="col-lg-4 summernote"><?= _e($data['contenu']) ?></textarea>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <label for="pubSourceNom" class="col-lg-2 col-form-label">Nom de la source *</label>
                            <div class="col-lg-4">
                                <input type="text" name="source_nom" value="<?= _e($data['source_nom']) ?>" id="pubSourceNom" placeholder="Ex: Gabon Media Time" required class="form-control">
                            </div>
                            <label for="pubSourceURL" class="col-lg-2 col-form-label">Lien de la source *</label>
                            <div class="col-lg-4">
                                <input type="url" name="source_lien" value="<?= _e($data['source_lien']) ?>" id="pubSourceURL" placeholder="Renseignez le lien de votre source" required class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Importance *</label>
                            <div class="col-lg-4">
                                <div>
                                    <label for="pubImportanceNormal"><input type="radio"  <?= ($data['important'] == 'NORMAL') ? 'checked' : ''; ?> name="important" id="pubImportanceNormal" value="NORMAL" required> Normal</label>
                                </div>
                                <div>
                                    <label for="pubImportanceBreakingNews"><input type="radio" name="important" id="pubImportanceBreakingNews" value="BREAKING-NEWS" <?= ($data['important'] == 'BREAKING-NEWS') ? 'checked' : ''; ?> required> Breaking news</label>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-sm btn-primary" type="submit">Enregistrer les modifications</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>