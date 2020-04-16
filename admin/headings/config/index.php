<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-12 col-lg-4">
        <h2><?= heading('title') ?></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href=".">Accueil</a>
            </li>
            <li class="breadcrumb-item active">
                <strong><a href="<?= route('home') ?>"><?= heading('title') ?></a></strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-content border-0">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li><a class="nav-link" href="#tab-1" data-toggle="tab"><i class="fa fa-cog"></i> Général</a></li>
                            <li><a class="nav-link active" href="#tab-2" data-toggle="tab"><i class="fa fa-bars"></i> Rubriques</a></li>
                            <li><a class="nav-link" href="#tab-3" data-toggle="tab"><i class="fa fa-paint-brush"></i> Apparence</a></li>
                            <li><a class="nav-link" href="#tab-4" data-toggle="tab"><i class="fa fa-database"></i> Base de données</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="tab-1">
                                <div class="panel-body">
                                    <form method="post" action="<?= route('save_general'); ?>">
                                        <?php foreach ($app as $key => $info) : ?>
                                            <?php if ($key == 'headings') continue; ?>
                                            <?php if (gettype($info) == 'array') echo '<h3>' . ucfirst(isset($data[$key]) ? $data[$key] : $key) . '</h3>'; ?>

                                            <div class="form-group row">
                                                <?php if (gettype($info) == 'array') : ?>
                                                    <?php foreach ($info as $key_sub_info => $sub_info) : ?>
                                                        <label for="<?= $key_sub_info ?>" class="col-lg-1 col-form-label"><?= ucfirst(isset($data[$key_sub_info]) ? $data[$key_sub_info] : $key_sub_info) ?></label>
                                                        <div class="col-lg-<?= (int) ((12 - count($info)) / count($info))  ?>">
                                                            <input type="text" name="<?= $key ?>[<?= $key_sub_info ?>]" id="<?= $key_sub_info ?>" value="<?= $sub_info ?>" placeholder="<?= $key_sub_info ?>" required class="form-control">
                                                        </div>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <label for="<?= $key ?>" class="col-lg-1 col-form-label"><?= ucfirst(isset($data[$key]) ? $data[$key] : $key) ?></label>
                                                    <div class="col-lg-11">
                                                        <?php if ($key == 'logo') : ?>
                                                            <img src="<?= asset($app['logo']) ?>" alt="Logo de l'application" height="64">
                                                        <?php endif; ?>
                                                        <input type="text" name="<?= $key ?>" id="<?= $key ?>" value="<?= $info ?>" placeholder="<?= ucfirst(isset($data[$key]) ? $data[$key] : $key) ?>" required class="form-control">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="hr-line-dashed"></div>
                                        <?php endforeach; ?>
                                        <div class="form-group row">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-sm btn-primary" type="submit">Enregistrer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane active" id="tab-2">
                                <div class="panel-body">
                                    <div class="panel-group" id="accordion">
                                        <?php foreach ($app['headings'] as $key_rub => $rubrique) : ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title">
                                                        <a class="d-block" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?= $key_rub ?>"><i class="fa fa-<?= $rubrique['icon'] ?>"></i> <?= $rubrique['title'] ?></a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-<?= $key_rub ?>" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <form method="post" action="<?= route('save_heading'); ?>">
                                                            <?php foreach ($rubrique as $key_rub => $value) : ?>
                                                                <?php if (gettype($value) == 'array') : ?>
                                                                    <?php if ($key_rub == 'deny') { ?>
                                                                        <?php echo '<h3>' . ucfirst(isset($data[$key_rub]) ? $data[$key_rub] : $key_rub) . '</h3>'; ?>
                                                                        <input type="hidden" name="deny[session]" value="<?= $value['session'] ?>">
                                                                        <div class="row form-group">
                                                                            <label class="col-lg-1 col-form-label">Profils</label>
                                                                            <div class="col-lg-4">
                                                                                <?php foreach ($app['profiles'] as $num_pro => $profile) : ?>
                                                                                    <div><label  for="profile-<?= $rubrique['name'] . '-' . $num_pro ?>"><input type="checkbox" name="deny[values][]" <?= in_array($num_pro, $value['values']) ? 'checked' : '' ?> id="profile-<?= $rubrique['name'] . '-' . $num_pro ?>" value="<?= $num_pro ?>"> <?= $profile ?></label></div>
                                                                                <?php endforeach; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="hr-line-dashed"></div>
                                                                    <?php } ?>
                                                                <?php else : ?>
                                                                    <div class="form-group row">
                                                                        <label for="<?= $key_rub ?>" class="col-lg-1 col-form-label"><?= ucfirst(isset($data[$key_rub]) ? $data[$key_rub] : $key_rub) ?></label>
                                                                        <div class="col-lg-11">
                                                                            <?php if ($key_rub == 'icon') : ?>
                                                                                <i class="fa fa-3x fa-<?= $value ?> mb-2"></i>
                                                                            <?php endif; ?>
                                                                            <input type="text" name="<?= $key_rub ?>" id="<?= $key_rub ?>" value="<?= $value ?>" placeholder="<?= ucfirst(isset($data[$key_rub]) ? $data[$key_rub] : $key_rub) ?>" required class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="hr-line-dashed"></div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                            <div class="form-group row">
                                                                <div class="col-lg-offset-2 col-lg-10">
                                                                    <button class="btn btn-sm btn-primary" type="submit">Enregistrer</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <pre><?= json_encode($rubrique, JSON_PRETTY_PRINT) ?></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>