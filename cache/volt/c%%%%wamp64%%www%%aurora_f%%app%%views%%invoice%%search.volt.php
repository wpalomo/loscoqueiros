<?= $this->getContent() ?>

<ul class="pager">
    <li class="previous pull-left">
        <?= $this->tag->linkTo(['invoice/index', '&larr; Go Back']) ?>
    </li>
</ul>

<?php $v38444218981iterated = false; ?><?php $v38444218981iterator = $page->items; $v38444218981incr = 0; $v38444218981loop = new stdClass(); $v38444218981loop->self = &$v38444218981loop; $v38444218981loop->length = count($v38444218981iterator); $v38444218981loop->index = 1; $v38444218981loop->index0 = 1; $v38444218981loop->revindex = $v38444218981loop->length; $v38444218981loop->revindex0 = $v38444218981loop->length - 1; ?><?php foreach ($v38444218981iterator as $miscodigos) { ?><?php $v38444218981loop->first = ($v38444218981incr == 0); $v38444218981loop->index = $v38444218981incr + 1; $v38444218981loop->index0 = $v38444218981incr; $v38444218981loop->revindex = $v38444218981loop->length - $v38444218981incr; $v38444218981loop->revindex0 = $v38444218981loop->length - ($v38444218981incr + 1); $v38444218981loop->last = ($v38444218981incr == ($v38444218981loop->length - 1)); ?><?php $v38444218981iterated = true; ?>
    <?php if ($v38444218981loop->first) { ?>
        <table class="table table-responsive table-bordered table-striped" align="center">
            <thead class="mdbcolor">
                <tr>
                    <th width="10%">Factura ID</th>
                    <th width="10%">Fecha Creada</th>
                    <th width="10%">Fecha Modificada</th>
                    <th>Secuencia</th>
                    <th>Transaccion</th>
                    <th>Cliente ID Lista</th>
                    <th width="20%">Cliente Nombres/Razon </th>
                    <th>Fecha Emision</th>
                    <th>Numero Factura</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th>Provincia</th>
                    <th>Codigo</th>
                    <th>Vendedor</th>
                    <th>Subtotal</th>
                    <th>%</th>
                    <th>Valor IVA</th>
                    <th>Total</th>
                    <th>Memo</th>
                    <th>Status</th>

                    <th></th>
                    <th></th>
                </tr>
            </thead>
        <?php } ?>
        <tbody>
            <tr>
                <td><?= $miscodigos->getTxnid() ?></td>
                <td><?= $miscodigos->getTimecreated() ?></td>
                <td><?= $miscodigos->getTimemodified() ?></td>
                <td><?= $miscodigos->getEditsequence() ?></td>
                <td><?= $miscodigos->getTxnnumber() ?></td>
                <td><?= $miscodigos->getCustomerrefListid() ?></td>
                <td><?= $miscodigos->getCustomerrefFullname() ?></td>
                <td><?= $miscodigos->getTxndate() ?></td>
                <td><?= $miscodigos->getRefnumber() ?></td>
                <td><?= $miscodigos->getBilladdressAddr1() ?></td>
                <td><?= $miscodigos->getBilladdressCity() ?></td>
                <td><?= $miscodigos->getBilladdressState() ?></td>
                <td><?= $miscodigos->getBilladdressPostalcode() ?></td>
                <td><?= $miscodigos->getSalesreprefFullname() ?></td>
                <td><?= $miscodigos->getSubtotal() ?></td>
                <td><?= $miscodigos->getSalestaxpercentage() ?></td>
                <td><?= $miscodigos->getSalestaxtotal() ?></td>
                <td><?= $miscodigos->getAppliedamount() ?></td>
                <td><?= $miscodigos->getMemo() ?></td>
                <td><?= $miscodigos->getStatus() ?></td>
                <td width="2%"><?= $this->tag->linkTo(['invoice/firmar/' . $miscodigos->Txnid, '<i class="glyphicon glyphicon-certificate"></i>', 'class' => 'btn btn-default']) ?></td>
                <td width="2%"><?= $this->tag->linkTo(['invoice/folder/' . $miscodigos->Txnid, '<i class="glyphicon glyphicon-folder-open"></i>', 'class' => 'btn btn-default']) ?></td>
        </tbody>
        <?php if ($v38444218981loop->last) { ?>
            <tbody>
                <tr>
                    <td colspan="7" align="right">
                        <div class="btn-group">
                            <?= $this->tag->linkTo(['invoice/search', '<i class="icon-fast-backward"></i> First', 'class' => 'btn btn-default']) ?>
                            <?= $this->tag->linkTo(['invoice/search?page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn btn-default']) ?>
                            <?= $this->tag->linkTo(['invoice/search?page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn btn-default']) ?>
                            <?= $this->tag->linkTo(['invoice/search?page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn btn-default']) ?>
                            <span class="help-inline"><?= $page->current ?>/<?= $page->total_pages ?></span>
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
    <?php } ?>
<?php $v38444218981incr++; } if (!$v38444218981iterated) { ?>
    No se han encontrado facturas sincronizadas desde el Quickbooks
<?php } ?>
