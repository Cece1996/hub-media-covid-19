<?php if (!defined('APP_PATH')) die('L\'accès direct à ce fichier est interdit.'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-12 col-lg-4">
        <h2><?= ucfirst(heading('plural')) ?></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href=".">Accueil</a>
            </li>
            <li class="breadcrumb-item active">
                <strong><?= heading('title') ?></strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content">
    <?php if (count($data) > 0) : ?>
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title d-print-none">
                    <h5><?= heading('listing')['title'] ?> </h5>
                    <div><span><?= count($data); ?> au total</span></div>
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
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <?php foreach (heading('listing')['columns'] as $thead) : ?>
                                    <th><?= (is_array($thead)) ? $thead['label'] : $thead ?></th>
                                <?php endforeach; ?>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <?php foreach (heading('listing')['columns'] as $field => $thead) : ?>
                                        <td><?= (isset($item[$field])) ? $item[$field] : 'Champ inexistant' ?></td>
                                    <?php endforeach; ?>
                                    <?php if (isset(heading('listing')['actions'])) : ?>
                                        <td class="d-print-none">
                                            <?php foreach (heading('listing')['actions'] as $action) : ?>
                                                <?php if (!has_right($action)) continue; ?>
                                                <a href="<?= route($action['handler'], ['id' => $item['id']]) ?>" class="btn btn-<?= $action['color'] ?> btn-xs btn-fill"><i class="fa fa-<?= $action['icon'] ?>"></i> <?= $action['text'] ?></a>
                                            <?php endforeach; ?>
                                        </td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="middle-box text-center animated bounceIn">
            <h3 class="font-bold"> <?= heading('male') ? 'Aucun' : 'Aucune' ?> <?= heading('singular') ?> pour le
                moment</h3>
            <div class="error-desc">
                Il n'y a pas encore de <?= heading('plural') ?> pour le moment.
            </div>
        </div>
    <?php endif; ?>
</div>