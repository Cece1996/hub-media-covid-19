<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-12 col-lg-4">
        <h2>Ajout d'une <?= heading('singular') ?></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href=".">Accueil</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= route('home') ?>"><?= heading('title') ?></a>
            </li>
            <li class="breadcrumb-item active">
                <strong><?= heading('male') ? 'Nouveau' : 'Nouvelle' ?> <?= heading('singular') ?></strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><?= heading('add')['title'] ?></h5>
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
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Cas positifs</label>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="positifs" placeholder="Cas positifs" class="form-control">
                            </div>
                            <label class="col-lg-3 col-form-label">Nombre de nouveaux cas</label>
                            <div class="col-lg-3">
                                <input type="number" min="0" name="prog_positifs" placeholder="Exemple : 3" value="0" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Décès</label>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="deces" placeholder="Nombre de décès" class="form-control">
                            </div>
                            <label class="col-lg-3 col-form-label">Nombre de nouveaux cas</label>
                            <div class="col-lg-3">
                                <input type="number" min="0" name="prog_deces" placeholder="Exemple : 3" value="0" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Guérisons</label>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="guerisons" placeholder="Nombre de guérisons" class="form-control">
                            </div>
                            <label class="col-lg-3 col-form-label">Nombre de nouveaux cas</label>
                            <div class="col-lg-3">
                                <input type="number" min="0" name="prog_guerisons" placeholder="Exemple : 3" value="0" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Date de la mise à jour</label>
                            <div class="col-lg-10">
                                <input type="text" name="maj_date" placeholder="Date de la mise à jour" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-sm btn-primary" type="submit">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>