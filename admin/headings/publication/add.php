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
                        <div class="form-group row">
                            <label for="pubAuteur" class="col-lg-2 col-form-label">Auteur</label>
                            <div class="col-lg-10">
                                <input type="text" name="auteur" id="pubAuteur" placeholder="Renseignez votre nom (Ex: Jean SAGUE)" required class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Catégorie</label>
                            <div class="col-lg-4">
                                <div>
                                    <label for="pubCategorieActualite"><input type="radio" checked name="categorie" id="pubCategorieActualite" value="ACTUALITE" required> Actualité</label>
                                </div>
                                <div>
                                    <label for="pubCategorieSensibilisation"><input type="radio" name="categorie" id="pubCategorieSensibilisation" value="SENSIBILISATION" required> Sensibilisation</label>
                                </div>
                                <div>
                                    <label for="pubCategorieMesures"><input type="radio" name="categorie" id="pubCategorieMesures" value="MESURES" required> Mesures gouvernementales</label>
                                </div>
                                <div>
                                    <label for="pubCategoriePoint"><input type="radio" name="categorie" id="pubCategoriePoint" value="POINT-PRESSE" required> Points de presse</label>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="col-lg-4">
                                <div>
                                    <label for="pubCategorieFake"><input type="radio" name="categorie" id="pubCategorieFake" value="FAKE" required> Fake news</label>
                                </div>
                                <div>
                                    <label for="pubCategorieCartes"><input type="radio" name="categorie" id="pubCategorieCartes" value="CARTES" required> Cartes</label>
                                </div>
                                <div>
                                    <label for="pubCategorieJeux"><input type="radio" name="categorie" id="pubCategorieJeux" value="JEUX" required> Jeux</label>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <label for="pubTitre" class="col-lg-2 col-form-label">Titre *</label>
                            <div class="col-lg-10">
                                <input type="text" name="titre" id="pubTitre" placeholder="Donnez un titre à votre publication" required class="form-control" value="<?= session('titre') ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pubImage" class="col-lg-2 col-form-label">Image *</label>
                            <div class="col-lg-10">
                                <input type="url" name="image" id="pubImage" placeholder="Renseignez l'adresse du lien de l'image" required class="form-control" value="<?= session('image') ?>">
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
                            <textarea name="contenu" id="pubContentTexte" cols="30" rows="20" placeholder="Soyez inspirez, rédigez quelque chose qui a de la poigne ..." required class="col-lg-4 summernote"> <?= session('contenu') ?></textarea>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <label for="pubSourceNom" class="col-lg-2 col-form-label">Nom de la source *</label>
                            <div class="col-lg-4">
                                <input type="text" name="source_nom" id="pubSourceNom" placeholder="Ex: Gabon Media Time" required class="form-control" value="<?= session('source_nom') ?>">
                            </div>
                            <label for="pubSourceURL" class="col-lg-2 col-form-label">Lien de la source *</label>
                            <div class="col-lg-4">
                                <input type="url" name="source_lien" id="pubSourceURL" placeholder="Renseignez le lien de votre source" required class="form-control" value="<?= session('source_lien') ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Importance *</label>
                            <div class="col-lg-4">
                                <div>
                                    <label for="pubImportanceNormal"><input type="radio" checked name="important" id="pubImportanceNormal" value="NORMAL" required> Normal</label>
                                </div>
                                <div>
                                    <label for="pubImportanceBreakingNews"><input type="radio" name="important" id="pubImportanceBreakingNews" value="BREAKING-NEWS" required> Breaking news</label>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-sm btn-primary" type="submit">Soumettre la publication</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>